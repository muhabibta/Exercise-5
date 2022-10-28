<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tambah Data | Exercise 5</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Exercise 5</a>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-white">
            <div class="masthead-content">
                <div class="container px-5 col-6">
                    <h1 class="my-4 fs-2 text-center">Form Tambah Data</h1>
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Buku</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukkan nama barang...">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="quantity" name="quantity"
                        placeholder="Masukkan jumlah barang...">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="price" name="price"
                    placeholder="Masukkan harga barang...">
                </div>
                
                <div class="mb-3">
                <label for="price" class="form-label">Jenis</label>
                <select class="form-select" aria-label="Default select example" name="jenis">
                    <option selected>Pilih Keterangan</option>
                    <option value="Action">Action</option>
                    <option value="Romance">Romance</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Horror">Horror</option>
                  </select>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary submit w-auto ms-auto">Tambah</button>
                </div>
                
        </div>
        </form>
                </div>
            </div>
        </header>
        <!-- Content section 1-->
        
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Created with <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
              </svg> by Muhammad Habib Taqiyullah</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
