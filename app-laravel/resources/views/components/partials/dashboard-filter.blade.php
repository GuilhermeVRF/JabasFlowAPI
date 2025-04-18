@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/partials/filter.css') }}">
@endpush

<div class="filter">
    <div class="filter-container">
        <form class="dashboard-search" action="{{ route('dashboard') }}" method="GET">
            <!-- Filtro por Intervalo de Datas -->
            <div class="form-group">
                <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar por Nome..." value="{{ $search }}">
            </div>    

            <button type="submit" class="btn-small submitBtn"><i class="fi fi-rs-search"></i></button>
        </form>

        <button id="filter" class="btn-small secondaryBtn"><i class="fi fi-rs-filter"></i></button>
    </div>
    
    <a href="{{ route('budget.create') }}" class="btn submitBtn">Adicionar Orçamento</a>
</div>

@push('scripts')
    <script src="{{ asset('js/components/partials/dashboardFilter.js') }}" defer></script>
@endpush