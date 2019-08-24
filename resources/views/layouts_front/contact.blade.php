<section id="contact" class="countdown section contact white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-heading">CONTACTO</h3>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Labore porro quo fugit, nostrum doloremque </p>
            </div>
            @if ( session('mensaje') )
                <div class="col-md-12 alert alert-success" role="alert">{{ session('mensaje') }}</div>      
            @endif

            @error('name')
            <div class="col-md-12 alert alert-danger" role="alert">Nombre requerido</div>
            @enderror
            @error('email')
            <div class="col-md-12 alert alert-danger" role="alert">Email requerido</div>
            @enderror
            @error('mobile')
            <div class="col-md-12 alert alert-danger" role="alert">Teléfono requerido</div>
            @enderror
            @error('content')
            <div class="col-md-12 alert alert-danger" role="alert">Mensaje requerido</div>
            @enderror

            <div class="col-md-8 col-md-push-2">
                <div class="contact-form">
                <form method="POST" action="{{ route('contact')}}">
                        @csrf
                        <div class="col-md-6 col-md-push-2">
                            <div class="form-group">
                                <input 
                                type="text" 
                                class="form-control" 
                                id="name" 
                                name="name" 
                                value="{{ old('name') }}"
                                placeholder="Nombre y Apellido" required>
                            </div>
                            <div class="form-group">
                                <input 
                                type="email" 
                                class="form-control" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}"
                                placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input 
                                type="text" 
                                class="form-control" 
                                id="mobile" 
                                name="mobile" 
                                value="{{ old('mobile') }}"
                                placeholder="Celular" required>
                            </div>
                        </div>

                        <div class="col-md-6 col-md-push-2">
                            <div class="form-group">
                                <textarea 
                                class="form-control" 
                                name="content" 
                                id="message" 
                                placeholder="Mensaje" 
                                maxlength="140" rows="7">{{ old('content') }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-4">
                        </div>

                        <div class="col-md-4">
                            <button 
                            
                            type="submit" id="submit" name="submit" class="btn btn-primary btn-lg text-center">ENVIAR</button>
                        </div>

                        <div class="col-md-4">
                        </div>

                    </form>
                </div>
            </div>





        </div>
    </div>

</section>

@if ($errors)
    <script>  
    window.onload = function() {
    document.getElementById('contact').scrollIntoView(); 
    }
    </script>
@endif

@if (session('mensaje'))
    <script>  
    window.onload = function() {
    document.getElementById('contact').scrollIntoView(); 
    }
    </script>
@endif