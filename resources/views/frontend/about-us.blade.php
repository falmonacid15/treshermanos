@extends('frontend.layouts.master')

@section('title') Nosotros @endsection

@section('description') Nuestra historia, origen y nuestra vision como empresa agricultora en la zona @endsection

@section('url') {{ request()->url() }} @endsection

@section('image') {{ asset('template/frontend/img/about-us.jpg') }} @endsection

@section('content')
    <header class="intro  align-items-center  jarallax" data-speed="0.5" data-img-position="50% 20%" style="background-image: url('{{ asset('template/frontend/img/about-us.jpg') }}');">
        <div class="pattern" style="opacity: 0.15;"></div>

        <div class="container">
            <div class="intro__text">
                <h1 class="intro__title">Nosotros</h1>
            </div>
        </div>
    </header>
    <main role="main">
        <section class="section section--no-pb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="col-MB-30">
                            <h2>Agricola Tres Hermanos</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a elementum lorem, id feugiat risus. Curabitur vitae nisl vestibulum, rhoncus mauris vel, mollis arcu. Aliquam erat volutpat. Aenean nec euismod risus, vel fermentum est. Morbi rutrum malesuada fermentum. Aenean porttitor viverra varius. Praesent bibendum, urna non tempus mattis, leo nibh convallis risus, quis ultrices urna risus in mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec convallis congue velit. Sed id accumsan nibh. Maecenas consequat lectus non pharetra suscipit. Quisque nec facilisis lacus. Nulla tincidunt sapien ut neque sagittis mattis. Ut id aliquet eros. Cras semper urna nec ex fermentum, quis rutrum turpis pharetra.

                            Vivamus a imperdiet mauris. Curabitur nisi mi, dignissim et dolor et, ultricies porttitor quam. Suspendisse placerat justo sem, nec luctus libero egestas at. Sed suscipit nisl at magna efficitur, ut efficitur lacus semper. Nam non vestibulum ante, vel bibendum erat. Phasellus luctus est id velit bibendum, et condimentum lectus bibendum. Curabitur vel magna justo. Proin vel efficitur justo, ut accumsan orci. Aliquam vulputate magna neque, quis blandit orci suscipit vestibulum. Etiam lacinia erat orci, vulputate malesuada lectus blandit sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed in nunc sit amet nisl tincidunt blandit ac sit amet augue. Aenean faucibus libero purus, id fringilla nunc rhoncus ac. Suspendisse sed sagittis odio, id ullamcorper libero. Sed id nunc vel neque bibendum laoreet sed et massa.

                            Interdum et malesuada fames ac ante ipsum primis in faucibus. In accumsan felis quis interdum eleifend. Suspendisse auctor risus nulla, eu finibus sapien finibus ut. Suspendisse nec nisi in ante sagittis sollicitudin et vel lorem. Aliquam aliquam vestibulum sapien ac gravida. Aliquam rutrum, dolor at aliquam faucibus, turpis lectus rhoncus massa, a volutpat risus sapien vitae magna. Ut facilisis purus sed aliquam egestas.

                            Duis a erat condimentum, sollicitudin nibh id, aliquet nunc. Proin consequat commodo ante eget eleifend. Sed at ligula non sapien pulvinar laoreet. Morbi sollicitudin et dolor vitae viverra. Nam lobortis efficitur mollis. Nulla id erat a diam consequat accumsan. Donec dignissim orci sit amet purus interdum, a fermentum justo sollicitudin.

                            Nullam mollis tincidunt arcu, ut faucibus arcu. Nullam elementum facilisis ligula nec rhoncus. Sed fermentum dictum lorem, eget sagittis urna ornare quis. Curabitur faucibus risus eros, in rutrum ligula consequat ac. Nam at mauris pellentesque, iaculis eros nec, rhoncus elit. Praesent consequat ipsum et laoreet laoreet. Etiam sit amet est et lectus sodales hendrerit ultrices eget erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut efficitur massa sit amet ipsum finibus, id luctus elit pellentesque. Integer et lorem sit amet elit hendrerit cursus eget at tellus. Vivamus sed dolor et nulla vehicula condimentum. Donec in venenatis lacus. Etiam eget pretium sem. Vivamus at massa at tellus iaculis scelerisque quis ultricies metus. Morbi placerat vehicula enim, molestie ultrices orci finibus quis. Integer tincidunt magna turpis, sed accumsan sapien iaculis sit amet.
                        </p>
                    </div>

                    <div class="col-lg-4 offset-lg-1">
                        <div class="col-MB-30">
                            <img class="d-block mx-auto img-fluid" src="{{ asset('template/frontend/img/logo-about.png') }}" alt="demo" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
