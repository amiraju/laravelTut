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
        DB::enableQueryLog();
        $posts=DB::table('posts')->select('id','title','content')->get();
        //dd(DB::getQueryLog());
        return view('post.index',compact('posts'));

        // $result=DB::table('orders')
        // ->join('orderdetails','orders.orderNumber','=','orderdetails.orderNumber')
        // ->select('orders.orderNumber','orders.orderDate','orders.status',
        // 'orderdetails.quantityOrdered','orderdetails.priceEach')->get();
        // return $result;
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
        return view('post.create');
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
      //$data=$request->all();
      //return $data;
      DB::table('posts')
      ->insert(['title'=>$request->title,'content'=>$request->content,'writer'=>'abc']);
      // $data=['Laravel 5.3','Lot of new features','sajid'];
      // DB::insert('insert into posts (title,content,writer)
      //               values(?,?,?)',$data);
        return redirect('/post');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post=DB::table('posts')->where('id',$id)->first();
      return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=DB::table('posts')->where('id',$id)->first();
        return view('post.edit',compact('post'));
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
        $data=$request->all();
        DB::table('posts')->where('id',$id)
        ->update(['title'=>$request->title,'content'=>$request->content]);
        return redirect('/post');;
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
      DB::table('posts')->where('id',$id)->delete();
      return redirect('/post');

    }
}
