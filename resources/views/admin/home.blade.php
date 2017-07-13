@extends('layouts.admin')

@section('title', 'Welcome')

@section('content')

<h1 class="page-header"><i class="fa fa-home" aria-hidden="true"></i> Accueil</h1>

<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon search-loupe"><i class="fa fa-search" aria-hidden="true"></i></span>
				<input type="search" name="" class="form-control search-ad" placeholder="Rechercher par AD">
			</div>
		</div>
	</div>
</div>

<br>

<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6">
	    <div class="panel panel-info panel-accueil">
	        <div class="panel-heading">
	        	<h4 class="text-center"><a href="{{ route('listeLocaux.index', ['Locaux', '&lt;25RI']) }}">Locaux <span class=""> (&lt;25ri) </span></a></h4>
	        	<p class="text-center">Contrat n° <span>3411862</span></p>
	        </div>
	        <a href="{{ route('listeLocaux.index', ['Locaux', '&lt;25RI']) }}">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-building fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">{{ $locauxStructures->where('RI', '!=', null)->count() }}</div>
		                    <div>locaux &lt;25ri</div>
		                </div>
		            </div>
		        </div>
		        <div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
	        </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6">
	    <div class="panel panel-info panel-accueil">
	        <div class="panel-heading">
	        	<h4 class="text-center"><a href="{{ route('listeACI.index', ['ACI', '&gt;50RI']) }}">ACI <span class=""> (&gt;50ri) </span></a></h4>
	        	<p class="text-center">Contrat n° <span>9322933</span></p>
	        </div>
	        <a href="{{ route('listeACI.index', ['ACI', '&gt;50RI']) }}">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-building fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">{{ $locauxStructures->where('RI', '>=50')->count() }}</div>
		                    <div>ACI &gt;50ri</div>
		                </div>
		            </div>
		        </div>
	        
	        	<div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
		    </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6">
	    <div class="panel panel-info panel-accueil">
	        <div class="panel-heading">
	        	<h4 class="text-center"><a href="{{ route('listeAciRCPRO.index', ['ACI', 'RCPRO']) }}">ACI <span class=""> (RC PRO) </span></a></h4>
	        	<p class="text-center">Contrat n° <span>971000094067F50</span></p>
	        </div>
	        <a href="{{ route('listeAciRCPRO.index', ['ACI', 'RCPRO']) }}">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-building fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">{{ $locauxStructures->whereIn('type_structure', ['ACI', 'ACI (jardin)'] )->count() }}</div>
		                    <div>RC PRO</div>
		                </div>
		            </div>
		        </div>
	        	<div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
		    </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6">
	    <div class="panel panel-info panel-accueil">
	        <div class="panel-heading">
	        	<h4 class="text-center"><a href="{{ route('listeEntrepots.index', ['Entrepots', '>25RI']) }}">Entrepots <span class=""> (&gt;25ri) </span></a></h4>
	        	<p class="text-center">Contrat n° <span>9453148</span></p>
	        </div>
	        <a href="{{ route('listeEntrepots.index', ['Entrepots', '>25RI']) }}">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-building fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">{{ $locauxStructures->where('type_structure', 'Entrepot')->where('RI', '>=25')->count() }}</div>
		                    <div>entrepots &gt;25ri</div>
		                </div>
		            </div>
		        </div>
	        
	        	<div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
		    </a>
	    </div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6">
		<div class="panel panel-info panel-accueil">
	        <div class="panel-heading">
	        	<h4 class="text-center"><a href="#">Algécos</a></h4>
	        	<p class="text-center">Contrat n° <span>9453755</span></p>
	        </div>
	        <a href="#">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-building fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">{{ $algecos }}</div>
		                    <div>algécos</div>
		                </div>
		            </div>
		        </div>
	        
	        	<div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
		    </a>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6">
	    <div class="panel panel-info panel-accueil">
	        <div class="panel-heading">
	        	<h4 class="text-center"><a href="#">Chambres Froides</a></h4>
	        	<p class="text-center">Contrat n° <span>9453062</span></p>
	        </div>
	        <a href="#">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-building fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">{{ $locauxStructures->where('type_structure', 'Chambre froide')->count() }}</div>
		                    <div>Ch. froides</div>
		                </div>
		            </div>
		        </div>
	        
	        	<div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
	    	</a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6">
	    <div class="panel panel-info panel-accueil">
		    <div class="panel-heading">
		    	<h4 class="text-center"><a href="#">Véhicules</a></h4>
		    	<p class="text-center">Contrat n° <span>1000 16 919 </span></p>
		    </div>
		    <a href="#">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-car fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">{{ $vehicules }}</div>
		                    <div>véhicules</div>
		                </div>
		            </div>
		        </div>
		    
		    	<div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
		    </a>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6">
	    <div class="panel panel-info panel-accueil">
	        <div class="panel-heading">
	        	<h4 class="text-center"><a href="#">Evènements</a></h4>
	        	<p class="text-center">Contrats n° <span>9454153 / 9454143</span></p>
	        </div>
	        <a href="#">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-calendar fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">{{ $evenements }}</div>
		                    <div>évènements</div>
		                </div>
		            </div>
		        </div>
	        
	        	<div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
		    </a>
	    </div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6">
		<div class="panel panel-info panel-accueil">
	        <div class="panel-heading">
	        	<h4 class="text-center"><a href="{{ route('listeBiensAN.index', ['AN', 'Biens']) }}">Biens AN</a></h4>
	        	<p class="text-center">Contrat n° <span>6665737</span></p>
	        </div>
	        <a href="{{ route('listeBiensAN.index', ['AN', 'Biens']) }}">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-building-o fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">{{ $locauxStructures->where('type_structure', 'Bien AN')->count() }}</div>
		                    <div>Biens AN</div>
		                </div>
		            </div>
		        </div>
	        	<div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
		    </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6">
		<div class="panel panel-info panel-accueil">
	        <div class="panel-heading">
	        	<h4 class="text-center"><a href="#">Logements</a></h4>
	        	<p class="text-center"><span></span></p>
	        </div>
	        <a href="#">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-bed fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">100</div>
		                    <div>logements</div>
		                </div>
		            </div>
		        </div>
	        
	        	<div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
		    </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6">
		<div class="panel panel-info panel-accueil">
	        <div class="panel-heading">
	        	<h4 class="text-center"><a href="#">Sinistres masse</a></h4>
	        	<p class="text-center"><span></span></p>
	        </div>
	        <a href="#">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-exclamation-triangle fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">{{ $sinistres->where('contrat_id', '!=', null)->count() }}</div>
		                    <div>Sinistres masse</div>
		                </div>
		            </div>
		        </div>
		        <div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
	        </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6">
		<div class="panel panel-info panel-accueil">
	        <div class="panel-heading">
	        	<h4 class="text-center"><a href="#">Sinistres véhicules</a></h4>
	        	<p class="text-center"><span></span></p>
	        </div>
	        <a href="#">
		        <div class="panel-body">
		            <div class="row">
		                <div class="col-xs-3">
		                    <i class="fa fa-exclamation-triangle fa-4x" aria-hidden="true"></i>
		                </div>
		                <div class="col-xs-9 text-right">
		                    <div class="huge">{{ $sinistres->where('contrat_v_id' , '!=', null)->count() }}</div>
		                    <div>Sinistres véhicules</div>
		                </div>
		            </div>
		        </div>
	        	<div class="panel-footer">
		            <span class="pull-left">Voir tout !</span>
		            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
		            <div class="clearfix"></div>
		        </div>
		    </a>
	    </div>
	</div>
</div>
@endsection

@section('script')

    @if (count($errors) > 0)
        
        new Noty({
            type: 'error',
            layout: 'topRight',
            theme: 'mint',
            text: '{{ $errors->first()  }}',
            timeout: 2500,
            progressBar: true,
            closeWith: ['click', 'button'],
            animation: {
                open: 'noty_effects_open',
                close: 'noty_effects_close'
            },
            id: false,
            force: false,
            killer: false,
            queue: 'global',
            container: false,
            buttons: [],
            sounds: {
                sources: [],
                volume: 1,
                conditions: []
            },
            titleCount: {
            conditions: []
            },
            modal: false
        }).show()
    @endif
    @if (session('success'))

        new Noty({
            type: 'success',
            layout: 'topRight',
            theme: 'mint',
            text: '{{ session('success') }}',
            timeout: 2500,
            progressBar: true,
            closeWith: ['click', 'button'],
            animation: {
                open: 'noty_effects_open',
                close: 'noty_effects_close'
            },
            id: false,
            force: false,
            killer: false,
            queue: 'global',
            container: false,
            buttons: [],
            sounds: {
                sources: [],
                volume: 1,
                conditions: []
            },
            titleCount: {
            conditions: []
            },
            modal: false
        }).show()

    @endif

@stop