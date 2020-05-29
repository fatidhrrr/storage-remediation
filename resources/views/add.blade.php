@extends('layouts/master')

@section('content')

@include('components/navigation')

      <section id="contact" class="section-bg wow fadeInUp py-5 ">
        <div class="text-center my-5">
            <h3>Formulaire Photo</h3> 
        </div>
        <div class="container">
            {{-- <section class="form py-5 mt-5 container"> --}}
            <form action="{{route('saveGalerie')}}" method="POST" class="contactForm ">
                @csrf
                {{-- <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="url" id="image" placeholder="url"
                            data-rule="text" data-msg="" />  
                        <div class="validation"></div> 
                    </div>
                </div> --}}
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="name" id="image" placeholder="Name"
                            data-rule="text" data-msg="" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="text" id="subject" placeholder="Description"
                        data-rule="minlen:4" data-msg="" />
                    <div class="validation"></div>
                </div>
                
                <input type="text" name="url" id="">
                <div class="text-center ">
                    <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</button>
                </div>

            </form>
        </div>
    </section>