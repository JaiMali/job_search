<div class="row">
  <div class="col-xs-12 col-sm-6">
    <div class="form-group">
      <label for="" class="control-label">College Name</label>
      <input type="text" placeholder="College name" name="internship[qualification][phd][college_name]"
             class="form-control college-name">
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="form-group">
          <label for="" class="control-label">Start Year</label>
          <input type="text" class="form-control year-datepicker" name="internship[qualification][phd][started_at]"
                 placeholder="Started at">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="form-group">
          <label for="" class="control-label">End Year</label>
          <input type="text" class="form-control year-datepicker" name="internship[qualification][phd][completed_at]"
                 placeholder="Completed at">
        </div>
      </div>
    </div>

  </div>
  <div class="col-xs-12 col-sm-6">
    <div class="form-group">
      <label for="" class="control-label">Stream</label>
      <select name="internship[qualification][phd][stream]" id="" class="form-control">
        <option value="">Select</option>
        @if(isset($qualifications['phd']))
          @foreach($qualifications['phd'] as $phd)
            <option value="{{$phd['id']}}">{{$php['name']}}</option>
          @endforeach
        @endif
      </select>
    </div>
    <div class="qualification-section">
    <div class="row">
      <div class="col-xs-12 col-sm-6"><label for="" class="control-label">Type</label>
        <select name="internship[qualification][phd][mark_type]" id="" class="q-type form-control">
          <option value="cgpa_4" selected="selected">CGPA 4</option>
          <option value="cgpa_10">CGPA 10</option>
          <option value="percentage">Percentage</option>
        </select>
      </div>
      <div class="col-xs-12 col-sm-6"><label for="" class="control-label">Mark</label>
        <input type="number" class="q-mark form-control" name="internship[qualification][phd][mark]"
               placeholder="Performance"
               step="0.01"  min="0" max="4">
      </div>
    </div>
      </div>
  </div>
</div>