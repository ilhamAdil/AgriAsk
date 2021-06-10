@extends('content.community')

@section('button')
<h4>Tags</h4>
<p>Gunakan tags untuk mengkategorikan pertanyaan Kamu dengan pertanyaan yang mirip dengan orang
lain</p>
@endsection

@section('precontent')    
<div class="border-bottom mt-2"></div>        
@endsection

@section('content') 
    <!-- tags -->
    <?php $i=0; ?>
    @foreach($tags->chunk(3) as $tag)
    <div class="row">
                <?php if($i==3) break; ?>
                @foreach($tag as $add)
                <div class="col-md-12 col-lg-4 my-2">
                           
                            <div class="border bg-white rounded p-3 box-shadow-card">
                                <a href="/community" class="text-decoration-none text-dark">
                                    <h6 class="p-1 bg-success text-white tags-tittle">{{ $add->tag_name}}</h6>
                                    <p class="tags-desc">Cari pertanyaan tentang {{ $add->tag_name }}</p>
                                    <small>
                                        <p class="mb-0">{{ $add->created_at->diffForHumans()}}</p>
                                    </small>
                                </a>
                            </div>
                        </div>
                 @endforeach
                 <?php $i++; ?>           
    </div>
    @endforeach

                    

                    <!-- tutup list tags -->

@endsection

@section('content2')
<div class="col-lg-3 right-container">
                    <div class="div border rounded bg-white p-3 right-panel">
                        <p class="text-warning">User Terbaru</p>    
                        <!-- user list -->
                    <div class="d-flex">
                    <div>
                    <?php $count=0; ?>     
                    @foreach($users as $user)                                                
                        <?php if($count==7) break; ?>  
                            <p>{{ $user->username }}</p>                      
                        <?php $count++; ?>                  
                    @endforeach   
                    </div>
                    
                    <div class="">
                    <?php $count=0; ?>     
                    @foreach($poin as $key => $values)                       
                        @foreach($values as $value)                          
                        <?php if($count==7) break; ?>                  
                  
                            
                            <div>                       
                            <p class="ms-2">
                            <i class="bi bi-star-fill" style="color: orange;"></i>
                            <small class="text-muted">{{ $value }} poin</small>
                            </p>
                            </div>                        
                        <?php $count++; ?>
                        @endforeach                       
                    @endforeach
                    </div>
                    </div>
                    </div>
                </div>
@endsection               