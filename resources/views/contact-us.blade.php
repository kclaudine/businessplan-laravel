<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book a business plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Book a business plan
                    </div>
                    <div class="card-body">
                        @if(Session::has('message_sent'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message_sent') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
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
                             </div>
                             <div class="form-group">
                                <label for="msg">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                                {{-- <textarea name="msg" id="" cols="30" rows="10"></textarea> --}}
                             </div><br>
                             <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                        <br><a href="/" style="font-size:19px;">Go Back</a><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>