@extends('layouts/master')

@include('components/naviguation')
<div class="container wow fadeInUp my-4">
    <div class="row text-center">
      <div class="col-md-12">   
        <h3 class="section-title">Galerie</h3>
        <div class="section-title-divider"></div>       
      </div>                     
    </div>          
  </div>
  <section id="myMessages" class="wow fadeInRight py-5">
    <div class="container text-center">
        <div class="mb-5">
            <table class="table table-striped">
                <thead class="bg-danger">  
                    <tr>
                        <th scope="col" class="text-center text-white">Id</th>
                        <th scope="col" class="text-center text-white">Galerie</th>
                        <th scope="col" class="text-center text-white">Action</th>
                    </tr>     
                </thead>
             
                <tbody>
                    @foreach ($galerie as $item)
                    <tr>
                    <th scope="row" class="text-center">{{$item->id}}</th>
                        <td class="text-center">
                            <img class="w-25" src="{{asset('storage/'.$item->url)}}" alt="">
                        </td>
                        <td class="d-flex justify-content-around">
                            <a href="{{route("show", $item->id)}}" class="deleteMsg" title="Show">
                                <i class="text-success fa-2x fas fa-eye"></i>
                            </a>
                            <a href="" title="Edit">
                               <i class="mx-2 text-warning fa-2x fas fa-edit"></i>
                            </a>
                            <a href="{{route("delete", $item->id)}}" class="deleteMsg" title="Delete">
                                <i class="mx-2 text-danger fa-2x fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <a href="{{route('ajoutPhotos')}}">
                    <button type="submit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</button>
                </a>
            </div>
        </div>
    </div>
</section>