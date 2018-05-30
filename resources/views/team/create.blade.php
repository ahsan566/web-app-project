@extends('layouts.app')

@section('content')

<head>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <script type="text/javascript">

  $(document).ready(function() {
    // The maximum number of options
    var MAX_OPTIONS = 5;

    $('#surveyForm')
    .bootstrapValidator({
      feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
        question: {
          validators: {
            notEmpty: {
              message: 'The question required and cannot be empty'
            }
          }
        },
        'option[]': {
          validators: {
            notEmpty: {
              message: 'The option required and cannot be empty'
            },
            stringLength: {
              max: 100,
              message: 'The option must be less than 100 characters long'
            }
          }
        }
      }
    })

    // Add button click handler
    .on('click', '.addButton', function() {
      var $template = $('#optionTemplate'),
      $clone    = $template
      .clone()
      .removeClass('hide')
      .removeAttr('id')
      .insertBefore($template),
      $option   = $clone.find('[name="option[]"]');

      // Add new field
      $('#surveyForm').bootstrapValidator('addField', $option);
    })

    // Remove button click handler
    .on('click', '.removeButton', function() {
      var $row    = $(this).parents('.form-group'),
      $option = $row.find('[name="option[]"]');

      // Remove element containing the option
      $row.remove();

      // Remove field
      $('#surveyForm').bootstrapValidator('removeField', $option);
    })

    // Called after adding new field
    .on('added.field.bv', function(e, data) {
      // data.field   --> The field name
      // data.element --> The new field element
      // data.options --> The new field options

      if (data.field === 'option[]') {
        if ($('#surveyForm').find(':visible[name="option[]"]').length >= MAX_OPTIONS) {
          $('#surveyForm').find('.addButton').attr('disabled', 'disabled');
        }
      }
    })

    // Called after removing the field
    .on('removed.field.bv', function(e, data) {
      if (data.field === 'option[]') {
        if ($('#surveyForm').find(':visible[name="option[]"]').length < MAX_OPTIONS) {
          $('#surveyForm').find('.addButton').removeAttr('disabled');
        }
      }
    });
  });

</script>

</head>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Add Team</div>
        <div class="panel-body">

          <form action="{{ route('team.store') }}" method="POST" >


            <div class="form-group">
              <label class="control-label col-lg-3">Name</label>
              <div class="col-lg-6">
                <input type="text" class="form-control"  placeholder="Enter Team Name" name="name">
              </div>
            </div><br><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Program</label>
              <div class="col-lg-6">
                <select name="program" class="form-control chosen chosen-select">
                  <option value="Null">Select a program</option>
                  <option value="BSCS">BSCS</option>
                  <option value="BBA">BBA</option>
                  <option value="ACF">ACF</option>
                  <option value="BSEM">BSEM</option>
                  <option value="BSSS">BSSS</option>
                </select>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-lg-3">Player</label>
              <div class="col-lg-6">
                <input type="text" class="form-control"  placeholder="Player Name" name="player">
              </div>
            </div><br><br>



            <form id="surveyForm" method="post" class="form-horizontal">

              <div class="form-group">
                <label class="col-sm-3 control-label">Options</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="Player Name" name="option[]" />
                </div>
                <div class="col-sm-4">
                  <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
                </div>
              </div>

              <!-- The option field template containing an option field and a Remove button -->
              <div class="form-group hide" id="optionTemplate">
                <div class="col-sm-offset-3 col-sm-5">
                  <input class="form-control" type="text" name="option[]" />
                </div>
                <div class="col-sm-4">
                  <button type="button" class="btn btn-default removeButton"><i class="fa fa-minus"></i></button>
                </div>
              </div>
            </form><br><br><br>

            <div align="center">
              <button type="submit" class="btn btn-primary">Add Team</button>
            </div>
            <input type="hidden" value="{{Session::token()}}" name="_token">

          </form>


        </div>
      </div>
      @if(count($errors)>0)
      <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
    </div>
  </div>
</div>
@endsection
