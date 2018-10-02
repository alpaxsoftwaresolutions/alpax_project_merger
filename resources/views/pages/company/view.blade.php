<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>branch name</th>
        <th>Address</th>
        <th>Contact Person</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($company as $cmp)
      <tr>
        <td>{{$cmp->name}}</td>
        <td> {{$cmp->branch_name}}</td>
        <td>{{$cmp->Unit}} {{$cmp->Bldg}} {{$cmp->Bldg}} {{$cmp->Street}} {{$cmp->City}} {{$cmp->Province}} {{$cmp->Country}} {{$cmp->ZIP_Code}} </td>
        <td>{{$cmp->contact_person}}</td>
        <td><a href = "/company/edit/{{$cmp->id}}">Edit Company</a></td>
        <td><a href = "/company/delete/{{$cmp->id}}">Delete Company</a></td>
      </tr>
      @endforeach
      </tbody>
  </table>