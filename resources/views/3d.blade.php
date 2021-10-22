@extends('layout')

@section('content')
    <div style="background: #3066BE">
        <p style="font-size: xx-large; text-align: center">
            Our 3D Model
        </p>
        <div class="center" style="background: #3066BE; margin-left: auto; margin-right: auto; display: block; width: 50%">
            <div>
                <iframe class="align-content-center"
                        src="https://3dwarehouse.sketchup.com/embed/b6b8c531-05da-4d3d-80bb-830152fdfefa" frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0" width="800" height="400" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
    <div class="center" style="background: #6cb2eb; width: 100%; height: auto; ">
        <div class="center" style="margin-left: auto; margin-right: auto; display: block; width: 50%">
            <p style="font-size: x-large">
                Welcome to our 3D model page. On this page, you can check what the current predictions are as to what this boat will look
                like. Keep in mind that this is just a theoretical model, considering these are just projections. Use your mouse or fingers
                to look around the boat.
            </p>
        </div>
        <div style="margin-left: auto; margin-right: auto; display: block; width: 50%">
            <img src="https://robbreport.com/wp-content/uploads/2020/04/equipment-health-monitoring-01.jpg">
        </div>
    </div>
@endsection
