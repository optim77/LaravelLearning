<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('embed','Embed:') !!}
    {!! Form::text('embed',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('categoryList','Category:') !!}
    {!! Form::select('categoryList[]',$categories,null,['class' => 'form-control','multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($buttonText,['class' => 'btn btn-info']) !!}
</div>