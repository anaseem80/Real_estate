<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/styeltweb.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-rtl/libraries/bootstrap.min.css') }}">
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <title>اضافة عقار</title>
</head>

<body>
    @include('layouts.nav')
    <h1>_ </h1>
    <h1> _</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    @if (session()->has('Edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="page-content p-lg-5 p-sm-1">
        <div class="container">
            <form action="{{ route('property.store') }}"method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3 row">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <label for="type">اختر العقار</label>
                        <select name="proType_id" id="proType_id" class="form-control rounded-0 p-3">
                        <option selected disabled>رجاء الأختيار</option>
                        @foreach ($proprtietypes as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <label for="type">نوع العقار</label>
                        <select class="form-control rounded-0 p-3" id="propertye_id" name="catogerie_id">
                        <option selected disabled>رجاء الأختيار</option>                       
                     </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">اسم العقار</label>
                        <input type="text" autocomplete="off" id="name" name="name"
                            class="form-control ms-2 rounded-0 p-3" placeholder="اسم العقار" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="town">اسم المدينة</label>
                        <input type="text" autocomplete="off" id="town" name="country"
                            class="form-control ms-2 rounded-0 p-3" placeholder="اسم المدينة" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="size">مساحة العقار</label>
                        <input type="number" autocomplete="off" id="size" name="space"
                            class="form-control ms-2 rounded-0 p-3" placeholder="مساحة العقار" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="price">السعر لكل متر</label>
                        <input type="number" autocomplete="off" id="price" name="price"
                            class="form-control ms-2 rounded-0 p-3" placeholder="السعر لكل متر" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">الوصف</label>
                        <textarea name="description" class="form-control" id="description" placeholder="اكتب الوصف هنا"></textarea>
                    </div>


                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <label for="rent type">بيع/ايجار</label>
                        <select class="form-control rounded-0 p-3 rent" id="rent type" name="Rental_term">
                        <option selected disabled>رجاء الأختيار</option>
                            <option title="Volvo is a car" value="سنوي">سنوي</option>
                            <option value="شهري">شهري</option>
                            <option value="يومي">يومي</option>
                            <option value="تمليك">للبيع</option>
                        </select>
                    </div>


                    <div class="col-lg-6 mb-3 mb-lg-0 direction" style="display:none">
                        <label for="direction">مكان السكن </label>
                        <select class="form-control rounded-0 p-3" id="direction" name="property_direction">
                        <option selected disabled>رجاء الأختيار</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <label for="type">تحديد عدد الغرف</label>
                        <select class="form-control rounded-0 p-3" id="type" name="numbeer_room">
                        <option selected disabled>رجاء الأختيار</option>
                            <option title="Volvo is a car" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>

                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <label for="rent type">تحديد عدد الحمامات</label>
                        <select class="form-control rounded-0 p-3" id="rent type" name="numbeer_toilet">
                            <option selected disabled>رجاء الأختيار</option>
                            <option title="Volvo is a car" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mb-3 mb-lg-0 payment-method" style="display:none">
                        <label for="rent type">طريقة الدفع</label>
                        <select class="form-control rounded-0 p-3" id="rent type" name="payment_method">
                            <option selected disabled>رجاء الأختيار</option>
                            <option value="قسط">قسط</option>
                            <option value="كاش">كاش</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="rent type">السعر الكلي</label>
                        <input type="text" name="pay" class="form-control ms-2 rounded-0 p-3"
                            placeholder="البادجت/المزانية">
                        <div class="mb-4">
                            <p class="mg-b-10">مميزات العقار</p>
                            <select name="future[]" multiple="multiple" class="form-control select2">
                                <option selected disabled>رجاء الأختيار</option>
                                <option selected value="سطح خاص">سطح خاص</option>
                                <option value="مدخل سيارة">مدخل سيارة</option>
                                <option value="مكيفات">مكيفات</option>
                                <option value="مدخل خاص ">مدخل خاص </option>
                                <option value="إطلالة على معلم رئيسي">إطلالة على معلم رئيسي</option>
                                <option value="إنترنت">إنترنت</option>
                                <option value="منطقة لعب للأطفال "> منطقة لعب للأطفال </option>
                                <option value="نادي رياضي مشترك ">نادي رياضي مشترك </option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group mb-3">
                        <label for="file">ارفق ملفك الان</label>
                        <input name="images[]" type="file" id="file"
                            class="form-control ms-2 rounded-0 p-3 english-font" placeholder="ادخل رقم الهاتف"
                            multiple id="gallery-photo-add" enctype="multipart/form-data" multiple required>
                    </div>




                    {{--  <div id="location-data" style="display: flex; align-items: center;">
                        <label for="latitude" style="display: inline-block; margin-right: 10px;">خطوط
                            العرض:</label>
                        <input autocomplete="off" class="form-control" type="text" id="latitude"
                            name="latitude" readonly style="display: inline-block;">
                        <label for="longitude" style="display: inline-block; margin-right: 10px;">خطوط
                            الطول:</label>
                        <input class="form-control" type="text" id="longitude" name="longitude" readonly
                            style="display: inline-block;">
                    </div>  --}}
                    <P></P>

                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="projectinput1"> العنوان</label>
                            <input autocomplete="off"type="text" id="pac-input" class="form-control"
                                placeholder="البحث" name="address">

                            {{-- @error('address')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror --}}
                        </div>
                    </div>




                    <input type="submit" value="إضافة"
                        class="btn btn-success rounded-0 px-5 py-3 my-4 d-flex align-items-center w-100 text-center justify-content-center">
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/js/libraries/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"
        integrity="sha512-dSI4QnNeaXiNEjX2N8bkb16B7aMu/8SI5/rE6NIa3Hr/HnWUO+EAZpizN2JQJrXuvU7z0HTgpBVk/sfGd0oW+w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
        integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/libraries/a1a75d5546.js') }}"></script>
    <script src="{{ asset('assets/s/libraries/swiper-bundle.min.js') }}"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(e){
        if($(this).val() == "شهري" || $(this).val() == "يومي" || $(this).val() == "سنوي"){
                $(".payment-method").css("display","none")
        }else{
            $(".payment-method").css("display","block")
        }
        var imagesPreview = function(input, placeToInsertImagePreview) {
                    if (input.files) {
                        var filesAmount = input.files.length;

                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();

                            reader.onload = function(event) {
                                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                    placeToInsertImagePreview);
                            }
                            console.log("Selected picture name: 111");
                            reader.readAsDataURL(input.files[i]);
                        }
                    }

                };
                console.log("Selected picture name: 222");
                $('#gallery-photo-add').on('change', function() {
                    imagesPreview(this, 'div.gallery');
                });
    })
        </script>


        <script>
            $("#pac-input").focusin(function() {
                $(this).val('');
            });

            $('#latitude').val('');
            $('#longitude').val('');

            // This example adds a search box to a map, using the Google Place Autocomplete
            // feature. People can enter geographical searches. The search box will return a
            // pick list containing a mix of places and predicted search terms.
            // This example requires the Places library. Include the libraries=places
            // parameter when you first load the API. For example:
            // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
            function initAutocomplete() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: 24.740691,
                        lng: 46.6528521
                    },
                    zoom: 13,
                    mapTypeId: 'roadmap'
                });
                // move pin and current location
                infoWindow = new google.maps.InfoWindow;
                geocoder = new google.maps.Geocoder();
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        map.setCenter(pos);
                        var marker = new google.maps.Marker({
                            position: new google.maps.LatLng(pos),
                            map: map,
                            title: 'موقعك الحالي'
                        });
                        markers.push(marker);
                        marker.addListener('click', function() {
                            geocodeLatLng(geocoder, map, infoWindow, marker);
                        });
                        // to get current position address on load
                        google.maps.event.trigger(marker, 'click');
                    }, function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    console.log('dsdsdsdsddsd');
                    handleLocationError(false, infoWindow, map.getCenter());
                }
                var geocoder = new google.maps.Geocoder();
                google.maps.event.addListener(map, 'click', function(event) {
                    SelectedLatLng = event.latLng;
                    geocoder.geocode({
                        'latLng': event.latLng
                    }, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                deleteMarkers();
                                addMarkerRunTime(event.latLng);
                                SelectedLocation = results[0].formatted_address;
                                console.log(results[0].formatted_address);
                                splitLatLng(String(event.latLng));
                                $("#pac-input").val(results[0].formatted_address);
                            }
                        }
                    });
                });

                function geocodeLatLng(geocoder, map, infowindow, markerCurrent) {
                    var latlng = {
                        lat: markerCurrent.position.lat(),
                        lng: markerCurrent.position.lng()
                    };
                    /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
                    $('#latitude').val(markerCurrent.position.lat());
                    $('#longitude').val(markerCurrent.position.lng());
                    document.getElementById("latitude").value = position.coords.latitude;
                    document.getElementById("longitude").value = position.coords.longitude;
                    geocoder.geocode({
                        'location': latlng
                    }, function(results, status) {
                        if (status === 'OK') {
                            if (results[0]) {
                                map.setZoom(8);
                                var marker = new google.maps.Marker({
                                    position: latlng,
                                    map: map
                                });
                                markers.push(marker);
                                infowindow.setContent(results[0].formatted_address);
                                SelectedLocation = results[0].formatted_address;
                                $("#pac-input").val(results[0].formatted_address);
                                infowindow.open(map, marker);
                            } else {
                                window.alert('No results found');
                            }
                        } else {
                            window.alert('Geocoder failed due to: ' + status);
                        }
                    });
                    SelectedLatLng = (markerCurrent.position.lat(), markerCurrent.position.lng());
                }

                function addMarkerRunTime(location) {
                    var marker = new google.maps.Marker({
                        position: location,
                        map: map
                    });
                    markers.push(marker);
                }

                function setMapOnAll(map) {
                    for (var i = 0; i < markers.length; i++) {
                        markers[i].setMap(map);
                    }
                }

                function clearMarkers() {
                    setMapOnAll(null);
                }

                function deleteMarkers() {
                    clearMarkers();
                    markers = [];
                }
                // Create the search box and link it to the UI element.
                var input = document.getElementById('pac-input');
                $("#pac-input").val("أبحث هنا ");
                var searchBox = new google.maps.places.SearchBox(input);
                map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
                // Bias the SearchBox results towards current map's viewport.
                map.addListener('bounds_changed', function() {
                    searchBox.setBounds(map.getBounds());
                });
                var markers = [];
                // Listen for the event fired when the user selects a prediction and retrieve
                // more details for that place.
                searchBox.addListener('places_changed', function() {
                    var places = searchBox.getPlaces();
                    if (places.length == 0) {
                        return;
                    }
                    // Clear out the old markers.
                    markers.forEach(function(marker) {
                        marker.setMap(null);
                    });
                    markers = [];
                    // For each place, get the icon, name and location.
                    var bounds = new google.maps.LatLngBounds();
                    places.forEach(function(place) {
                        if (!place.geometry) {
                            console.log("Returned place contains no geometry");
                            return;
                        }
                        var icon = {
                            url: place.icon,
                            size: new google.maps.Size(100, 100),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(17, 34),
                            scaledSize: new google.maps.Size(25, 25)
                        };
                        // Create a marker for each place.
                        markers.push(new google.maps.Marker({
                            map: map,
                            icon: icon,
                            title: place.name,
                            position: place.geometry.location
                        }));
                        $('#latitude').val(place.geometry.location.lat());
                        $('#longitude').val(place.geometry.location.lng());
                        if (place.geometry.viewport) {
                            // Only geocodes have viewport.
                            bounds.union(place.geometry.viewport);
                        } else {
                            bounds.extend(place.geometry.location);
                        }
                    });
                    map.fitBounds(bounds);
                });
            }
        })
        $("#proType_id").on("change",function(){
            $(".direction").css("display","block")
            if($(this).val() == 1){
                $("#direction").html(`
                    <option selected="" disabled="">رجاء الأختيار</option>
                    <option value="داخل الكومباوند">داخل الكومباوند</option>
                    <option value="خارج الكومباوند">خارج الكومباوند</option>
                `)
            }else{
                $("#direction").html(`
                    <option selected="" disabled="">رجاء الأختيار</option>
                    <option value="داخل المول">داخل المول</option>
                    <option value="خارج المول">خارج المول</option>
                `)
            }
        })
        $('#proType_id').change(function() {
            var id = $(this).val();
            console.log(id);
            if (id) {
                $.ajax({
                    url: "{{ url('property_ajax') }}/" + id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $("#propertye_id").find('option:not(:first)').remove();
                        if (data['newproperty']) {
                            $.each(data['newproperty'], function(key, value) {
                                $("#propertye_id").append("<option value=" + value[
                                        'id'] + ">" + value['name'] +
                                    "</option>");
                            });
                        }

                    }
                });
            } else {
                $('#propertye_id').empty();
            }
        });
    });
</script>

</html>
