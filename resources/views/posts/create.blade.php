@extends('layouts.master')

@section('content')

    @include('welcome.navbar')
    
        <div class="container">
                            {{--  {{dd($pin->numbers)}}  --}}

            @include('pages.carousel')
            <h2>Drop a Question</h2>
                    <form action="/posts" method="POST">
                        {{ csrf_field() }}

                        @include('partials.error')
                        <input  class="form-control" type="hidden" name="random" value="$pin->numbers" id="name"  required>
                        
                    <div class="form-group">
                        <label for="name">Title <span>*</span></label>
                        <input  class="form-control" type="text" name="title" id="name"  required>
                    </div>


                        

                            <div class="form-group">
                                <label for="fileselect">Files of the Question:</label>
                                <input  class="btn btn-success" type="file" id="fileselect" name="imagePath" multiple="multiple" />
                            </div>
                            
                            <div id="filedrop">or drop files here</div>

                        </fieldset>
                    	<h2>File information:</h2>
                        <div id="output" ></div>

                        <hr>
                        <br><br>
                    
                    <div class="form-group">
                        <label for="body">Content</label>
                        <textarea class="form-control "  name="body" id="summernote" rows="5" size="10"></textarea>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-block btn-submit" type="submit" name="submit" value="Submit Form">
                        &nbsp;
                    </div>
                    
                

                    <script>
                        // output information
                        function Output(msg) {
                            var m = document.getElementById("output");
                            m.innerHTML = msg + m.innerHTML;
                        }


                        // drop box hover effect
                        function FileHover(e) {
                            e.preventDefault();
                            e.target.className = (e.type == "dragover" ? "hover" : "");
                        }


                        // file selection
                        function FileSelect(e) {
                            FileHover(e);
                            
                            var files = e.target.files || e.dataTransfer.files;

                            // process all files
                            for (var i = 0, f; f = files[i]; i++) {
                                ParseFile(f);
                            }

                        }


                        // output file information
                        function ParseFile(file) {

                            

                            // display an image
                            if (file.type.indexOf("image") == 0) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    Output(
                                        "<p><strong>" + file.name + ":</strong><br />" + 
                                        '<img src="' + e.target.result +
                                        '" class="img-responsive" style="width:300px; height:300px;  float:left;  " /></p>'
                                    );
                                }
                                reader.readAsDataURL(file);
                            }

                            // display text
                            if (file.type.indexOf("text") == 0) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    Output(
                                        "<p>" + file.name +
                                        ": <p><pre>" + e.target.result +
                                        "</pre>"
                                    );
                                }
                                reader.readAsText(file);
                            }

                        }


                        // initialization
                        if (window.File && window.FileList && window.FileReader) {
                            
                            // select box used
                            var fileselect = document.getElementById("fileselect");
                            fileselect.addEventListener("change", FileSelect, false);
                            
                            // drop box used
                            var filedrop = document.getElementById("filedrop");
                            filedrop.addEventListener("dragover", FileHover, false);
                            filedrop.addEventListener("drop", FileSelect, false);
                            
                        }


                    </script>
                    </form>
        
                </div>

    @include('pages.footer')
@endsection