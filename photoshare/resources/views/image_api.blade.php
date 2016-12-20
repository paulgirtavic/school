@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Web Api</div>

                <div class="panel-body">
                    <section class="featured">
                        <div class="content-wrapper">
                            <h2>How To</h2>
                            <p>
                                Use this page to see the example of photoShareWebService Web API for this picture below
                                <img src="http://54.154.134.212/uploads/ExDrjF_img_1771.jpg" />

                            </p>
                        </div>
                    </section>
                    <section class="content-wrapper main-content clear-fix">
                        <h2 id="Exif">Exif</h2>
                        <table class="help-page-table">
                            <thead>
                            <tr><th>API</th><th>Description</th><th>Example of an API</th><th></th></tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="api-name">
                                    <a href="/api/exif/19" target="_blank">GET &nbsp;api/exif/{photoID >=19}</a>
                                </td>
                                <td class="api-documentation">
                                    <p>Returns JSON of the image metadata information by the specified {photoIDnumber}
                                    Currently the latest ID is number 19 and to be able to see it's  EXIF data /api/exif/19
                                    needs to be typed in the browser. For any next uploaded picture it will be /api/exif/20
                                    and so on.</p>
                                    <br/>
                                    
                                </td>
                                <td>
                                    <a href="/api/exif/19" target="_blank">Link</a>
                                </td>
                                <td>
                                    <a href="/api/exif/19/json" target="_blank">Download Link</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection