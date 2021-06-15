@extends('layouts.app')

@section('content')
@include('inc.navbaritems')
<h1>{{$asset->name}}</h1>
<p><br><b>Description : </b>{{$asset->body}}
<br><br><b>Created On : </b>{{$asset->created_at}}
<br><br><b>Last Updated On : </b>{{$asset->updated_at}}
<br><br><b>Price : </b>{{$asset->cost}}
<br><br><b>Group : </b>{{$asset->group}}
<br><br><a href="#" class="btn btn-info"  data-toggle="modal" data-target="#myModal">Edit</a>
<a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#myModald">Delete</a>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            {!! Form::open(['action'=>['AssetsController@update',$asset->id],'method'=>'PUT']) !!}
            <div class="form-group">
                {{Form::label('name','Asset Name')}}
                {{Form::text('name',$asset->name,['class'=>'form-control','placeholder'=>'Asset Name'])}}
            </div>
            <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', $asset->body, ['class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
            <div class="form-group">
                {{Form::label('cost','Price')}}
                {{Form::text('cost',$asset->cost,['class'=>'form-control','placeholder'=>'Price'])}}
            </div>
            <div class="form-group">
              {{Form::label('group','Group')}}
              {{Form::text('group',$asset->group,['class'=>'form-control','placeholder'=>'Group'])}}
          </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
        {{--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>--}}
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModald" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            <h3>Are you sure?</h3>
        </div>
        <div class="modal-footer">
          {!!Form::open(['action'=>['AssetsController@destroy',$asset->id],'method'=>'POST','class'=>'float-right:200px'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Confirm',['class'=>'btn btn-primary'])}}
                {{--<a href="/Assetstocks/confirm" class="btn btn-danger">Delete</a> --}}
                {{Form::close()}}
        </div>
      </div>
      
    </div>
  </div>


  <a href="*" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Check Out</a>
  <!-- Modal -->
<div class="modal fade" id="myModal1" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
            <h4 class="modal-title">Check Out</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      
    </div>
    <div class="modal-body">
        {!! Form::open(['action'=>['CheckOutController@update',$asset->id],'method'=>'PUT']) !!}
        <div class="form-group">
            {{--{{Form::label('name','Asset Name')}}
            {{Form::text('name',$asset->name,['class'=>'form-control','placeholder'=>'Asset Name'])}}--}}
            <label>Check Out To:-</label>



{{--//mysql_connect('hostname', 'username', 'password');
mysql_connect('root', 'ezoi', '');

mysql_select_db('ezoi');

$sql = "SELECT id FROM users";
$result = mysql_query($sql);

echo "<select name='id'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
}
echo "</select>";

?*/






            {{--$query = $db->query("YOUR QUERY HERE"); // Run your query

            echo '<select name="DROP DOWN NAME">'; // Open your drop down box

          // Loop through the query results, outputing the options one by one
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="'.$row['something'].'">'.$row['something'].'</option>';
}

echo '</select>';--}}




            <select class="form control" name="name" id="user_id_to">
              
              <option value="1">Jatin</option>
              <option value="2">User</option>
            </select>
        </div>
       {{-- <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $asset->body, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('cost','Price')}}
            {{Form::text('cost',$asset->cost,['class'=>'form-control','placeholder'=>'Price'])}}--}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
    {{--<div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
  
</div>
</div>--}}

@endsection