@extends('layouts.master') @section('content') @section('title', 'SIMBUMDes -
edit Postingan') @section('custom-style')
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">

@endsection @section('content')

<!-- page content -->
<div class="" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Berita</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Postingan</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                    role="button"
                                    aria-expanded="false">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li>
                                <a class="close-link">
                                    <i class="fa fa-close"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        @foreach ($post as $Post =>$data)
                        <?php $content = substr($data->content, 0, 100); ?>

                        <div class="col-md-55">
                            <div class="thumbnail">
                                <div class="image view view-first">
                                    <img
                                        style="width: 100%; display: block;"
                                        src="image/{{$data->gambar}}"
                                        alt="image"/>
                                    <div class="mask no-caption">
                                        <div class="tools tools-bottom">
                                            <a href="post/{{$data->id}}">
                                                <i>Read More..</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="post/{{$data->id}}">
                                    <div class="caption">
                                        <p>
                                            <strong>{{$data->title}}</strong>
                                            <br>
                                            Category:
                                            {{$data->kategori}}
                                        </p>
                                    </div>
                                </a>

                            </div>
                        </div>
                        @endforeach
                      </div>
                      
                    </div>
                    {{ $post->links() }}
                    
                  </div>
                </div>
              </div>
</div>
</div>
<!-- /page content -->
@endsection