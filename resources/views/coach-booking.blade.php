<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book a coach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Book a coach
                    </div>
                    <div class="card-body">
                        @if(Session::has('message_sent'))
                            <div class="alert alert-success" role="alert">
                                {{-- <button type="button" class="close" data-dismiss="alert">x</button> --}}
                                {{ Session::get('message_sent') }}
                            </div>
                        @endif
                        <form action="{{ route('coach.send') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                           <div class="form-group">
                               <label for="name">Name</label>
                               <input type="text" name="name" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control">
                             </div>
                             <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control">
                             </div> <br>
                             <div class="form-group">
                                <select name="choices" class="custom-select custom-select-lg mb-3" class="form-control">
                                    <option class="form-control">You may select the question you have here</option>
                                    <option value="1" class="form-control">One</option>
                                    <option value="2" class="form-control">Two</option>
                                    <option value="3" class="form-control">Three</option>
                                </select>
                             </div>
                             <div class="form-group">
                                <label for="msg">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                                {{-- <textarea name="msg" id="" cols="80" rows="3"></textarea> --}}
                             </div> <br>
                             <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                        <br> <span> <a href="/" style="font-size:19px;">Go Back</a></span><br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>