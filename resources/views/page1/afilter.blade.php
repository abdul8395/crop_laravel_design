<div class="filter-wrapper">
	<span class="filter-title">{{$filterTitle}}</span>
	<div class="d-flex filter">
		<select class="" aria-label="select {{$filterTitle}}" id="select-{{$filterTitle}}">
			<option value="all" selected>All</option>
			@foreach($list as $d)
			<option value="{{   $d[$optionName]  }}">{{ $d[$optionName]  }}</option>
			@endforeach
		</select>
	</div>
</div>