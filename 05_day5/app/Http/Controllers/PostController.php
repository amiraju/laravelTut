<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //day4 start
        // $result=DB::table('posts')->select('title','content')->get();
        // return $result;
        $result=DB::table('orders')
        ->join('orderdetails','orders.orderNumber','=','orderdetails.orderNumber')
        ->select('orders.orderNumber','orders.orderDate','orders.status',
        'orderdetails.quantityOrdered','orderdetails.priceEach')->get();
        return $result;
        // $select=DB::select('select *from posts');
        // return $select;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //day4 start
      DB::table('posts')->insert([['title'=>'Lumen',
      'content'=>'Lumen is light weight version of Laravel','writer'=>'abc'],
      ['title'=>'symphony',
      'content'=>'symphony is Boss','writer'=>'abc'],
      ['title'=>'ZF',
      'content'=>'ZF Sucks','writer'=>'abc']]);
      // $data=['Laravel 5.3','Lot of new features','sajid'];
      // DB::insert('insert into posts (title,content,writer)
      //               values(?,?,?)',$data);
        //return $inserted;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $result=DB::table('posts')->where('id',$id)->first();
      return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $updated=DB::update('update posts set title="laravel 5.4" where id=?',[$id]);
        // return $updated;
        $updated=DB::table('posts')->where('id',$id)->update(['title'=>'Phalcon',
                                    'content'=>'Phalcon is the future']);
                                    return $updated;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // $deleted=DB::delete('delete from posts where id=?',[$id]);
      // return $deleted;
    }
}
