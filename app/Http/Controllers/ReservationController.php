<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       // $products=DB::table('products')// naziv tabele u bazu
        //->get();
        //dd($cars);//to je za ono crno sto se pojavi
        //return view('reservation.index',['products'=>$products]);

        //ispisati najprodavaniji proizvod
    
        
        //1: Ispis kupljenih proizvoda
        $most_common_products = DB::table('products')
        ->select('products.*', DB::raw('count(*) as brojac'))
        ->groupBy('products.id')
        ->join('reservations', 'products.id', '=', 'reservations.product')
        ->orderByRaw('COUNT(*) DESC')
        ->get();

        //2. Ispisati kupljene proizvode marke Zara

        $product_zara = DB::table('products')  //prisutp tabeli products
        ->select('products.name as product_name') //atribut name u tabeli products postavljen kao product_name
        ->groupBy('products.id') //uzima se ID od tabele products, pošto treba da s eispisu podaci iz tabele Proizvodi
        ->join('reservations', 'products.id', '=', 'reservations.product')
        ->join('brands', 'products.brand', '=', 'brands.id')
        ->where('brands.name', 'Zara')
        ->get();

        //3. Ispisati sve proizvode kategorije Haljine veličine XS kupljene u određenom 
        //periodu od 2022-15-01 00:00:00 do 2022-10-02 23:59:59.


        $from = '2022-15-01 00:00:00';
        $to = '2022-10-02 23:59:59';

        $product_haljina = DB::table('products')  
        ->select('products.name as product_name') 
        ->groupBy('products.id') 
        ->join('reservations', 'products.id', '=', 'reservations.product')
        ->join('categories', 'products.category', '=', 'categories.id')
        ->where('categories.typeofclothing','Haljine')
        ->where('products.size', 'XS')
        ->whereBetween('reservationdate',[$from,$to])
        ->get();

        
        //4. ispisati broj kupljenih proizvoda u periodu 
       // $from = '2022-15-01 00:00:00';
        //$to = '2022-20-02 23:59:59';

        
       // $product_rezervacija = DB::table('reservations')  //prisutp tabeli reservations
       // ->whereBetween('reservationdate',[$from, $to])
        //->count();

        //4. Ispisati sve kupljene proizvode brenda Adidas veličine M, tipa Ž, boje crna.

        $product_adidas = DB::table('products')  //prisutp tabeli products
        ->select('products.name as product_name') //atribut name u tabeli products postavljen kao product_name
        ->groupBy('products.id') //uzima se ID od tabele products, pošto treba da s eispisu podaci iz tabele Proizvodi
        ->join('reservations', 'products.id', '=', 'reservations.product')
        ->join('brands', 'products.brand', '=', 'brands.id')
        ->where('brands.name', 'Adidas')
        ->where('products.type', 'Ž')
        ->where('products.size','M')
        ->where('products.color', 'crna')
        ->get();

        //5. Ispisati sve brendove tipa Hlače, iz države SAD.a plave boje tipa: muške.
        $brand_country = DB::table('brands')  //prisutp tabeli products
        ->select('brands.name as brand_name') //atribut name u tabeli products postavljen kao product_name
        ->groupBy('brands.id') 
        ->join('products', 'brands.id', '=', 'products.brand')
        ->join('categories', 'products.category', '=', 'categories.id')
        ->where('categories.typeofclothing', 'Hlače')
        ->where('products.type', 'M')
        ->where('products.color','plava')
        ->where('brands.country', 'SAD')
        ->get();

        //6. ispsiati sve proizvode koji su kupljeni raspon cijena : od 27 do 60 ,opisa: široke hlače, veličine L, boja plava država Turska

        $from = '30';
        $to = '60';

        $product_price = DB::table('products')  
        ->select('products.name as product_name') 
        ->groupBy('products.id') 
        ->join('reservations', 'products.id', '=', 'reservations.product')
        ->join('brands', 'products.brand', '=', 'brands.id')
        ->where('brands.country', 'Turska')
        ->where('products.description', 'široke hlače')
        ->where('products.size','L')
        ->where('products.color', 'plava')
        ->whereBetween('price',[$from,$to])
        ->get();

        //7. Ispis svih kupaca koji su kupili džemper -država Francuska

        $user_product = DB::table('users')
        ->select('users.name as user_name', 'users.id as user_id')
        ->groupBy('users.id')
        ->join('reservations','users.id','=','reservations.user')
        ->join('products','reservations.product','=','products.id')
         ->join('brands', 'products.brand', '=', 'brands.id')
       ->join('categories', 'products.category', '=', 'categories.id')
        ->where('categories.typeofclothing','Džemperi i Kardigani')
        ->where('brands.country','Francuska')
        ->get();

        //8. Ispisati sve proizvode koje  koje su kupljene od korisnika Lejla, veličine XS i boje roza
        $product_Elma = DB::table('products')  
        ->select('products.name as product_name') 
        ->groupBy('products.id') 
        ->join('reservations', 'products.id', '=', 'reservations.product')
        ->join('users','reservations.user','=','users.id')
        ->where('users.name','Lejla')
        ->where('products.size','XS')
        ->where('products.color','roza')
        ->get();





        return view('reservation.index',
        [

            'most_common_products'=> $most_common_products,
            'product_zara' => $product_zara , 
            'product_haljina' => $product_haljina, 
           // 'product_rezervacija' => $product_rezervacija,
            'product_adidas' => $product_adidas,
            'brand_country'  => $brand_country,
            'product_price' => $product_price,
            'user_product' =>  $user_product,
            'product_Elma' => $product_Elma
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id=$request->id;

        $products=DB::table('products')
        ->where('id', $id)
        ->get();
        
        $users=DB::table('users')
        ->get();

        return view('products.reservation',['products'=>$products, 'users'=>$users]);
        //return view('cvijeće.add');// naziv foldera i add-naziv file

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        //
         DB::table('reservations')->insert([
           'amount' => $request->amount,

           'reservationdate' => $request->reservationdate,
           
           'product' => $request->product,// to je naziv name u add.blade.index

            'user' => $user_id,

 ]);
         return redirect()->route('products');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
