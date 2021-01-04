<form action="/post" enctype="multipart/form-data" method="post">
    @csrf
 
       
     
            
                <div class="form-group  m-3 row">
 
                    <input id="title" type="text"
                        placeholder="Title"
                        class="col-12 form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title"
                        value="{{ old('title') }}" autocomplete="title" autofocus>

                    @if ($errors->has('title'))
                        <span class="col-12 invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group  m-3 row">
 
                    <input id="tags"
                           placeholder="Tags :example  fashion,art,christmas..." type="text" class="col-12 form-control{{ $errors->has('tags') ? ' is-invalid' : '' }}"
                        name="tags" value="{{ old('tags') }}" autocomplete="tags" autofocus>

                    @if ($errors->has('tags'))
                        <span class=" col-12 invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tags') }}</strong>
                        </span>
                    @endif
                </div>

               
 
                <div class="form-group row  m-3">
 
                <select id="category" name="category" value="{{old('category')}}" class=" col-12 form-control" style="  ">
                        <option value="Téléphones">Téléphones</option>
                        <option value="Tablettes">Tablettes</option>
                        <option value="Ordinateurs">Ordinateurs portables</option>
                        <option value="Ordinateurs de bureau">Ordinateurs de bureau</option>
                        <option value="Accessoires informatique et Gadgets">Accessoires informatique et Gadgets</option>
                        <option value="Jeux vidéo et Consoles">Jeux vidéo et Consoles</option>
                        <option value="Appareils photo et Caméras">Appareils photo et Caméras</option>
                        <option value="Télévisions">Télévisions</option>
                         
                        <option value="Voitures">Voitures</option>
                        <option value="Motos">Motos</option>
                        <option value="Vélos">Vélos</option>
                        <option value="Véhicules Professionnels">Véhicules Professionnels</option>
                        <option value="Bateaux">Bateaux</option>
                        <option value="Pièces et Accessoires pour véhicules">Pièces et Accessoires pour véhicules</option>

                        <option value="Vêtements">Vêtements</option>
                        <option value="Chaussures">Chaussures</option>
                        <option value="Montres et Bijoux">Montres et Bijoux</option>
                        <option value="Sacs et Accessoires">Sacs et Accessoires</option>
                        <option value="Vêtements pour enfant et bébé">Vêtements pour enfant et bébé</option>
                        <option value="Equipements pour enfant et bébé">Equipements pour enfant et bébé</option>
                        <option value="Produits de beauté">Produits de beauté</option>
                        
                        <option value="Sports et Loisirs">Sports et Loisirs</option>
                        <option value="Animaux">Animaux</option>
                        <option value="Instruments de Musique">Instruments de Musique</option>
                        <option value="Art et Collections">Art et Collections</option>
                        <option value="Voyages et Billetterie">Voyages et Billetterie</option>
                        <option value="Films, Livres, Magazines">Films, Livres, Magazines</option>

                      
                        <option value="AUTRES">AUTRES</option>
                    </select>
                    @if ($errors->has('category'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('category') }}</strong>
                    </span>
                @endif
                </div>


              



                <div class="row  m-3">
 
                    <input type="file" class="col-md-9 form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>

                <div class="row  pt-4"  >
                    <button style="width: 100%" class="btn   m-3  btn-primary ">Add New Post</button>
                </div>

 

</form>