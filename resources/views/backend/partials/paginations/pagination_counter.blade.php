@php
    $toPage = $Records->currentPage() * $Records->perPage();
    $totalRec = $Records->total();
    $fromPage = $totalRec > 0 ? (($Records->currentPage() - 1) * $Records->perPage()) + 1 : 0;
@endphp
<span class="hidden-xs va-m text-muted mr15"> Showing
    <strong>{{$fromPage}}</strong> to
    <strong>{{$toPage > $totalRec ? $totalRec : $toPage}}</strong> of
    <strong>{{$totalRec}}</strong>
</span>
<div class="btn-group">
        {{$Records->appends($request->all())->links('pagination::bootstrap-4')}}
</div>
