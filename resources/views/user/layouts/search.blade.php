@section('search')

                        <form class="form-inline" method="get" action="{{ route('search') }}">
                            <input class="form-control mr-sm-2" type="text" name="s" placeholder="i шо ты хочешь?" required>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="cursor:pointer;">Search</button>
                        </form>
                        <style>
                            .form-inline .form-control.is-invalid{
                                border: 2px solid red;
                            }
                        </style>

@endsection