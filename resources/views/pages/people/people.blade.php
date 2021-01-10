@extends('layouts.template')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card card-info">
            <div class="card-header">
                Search for a person
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label for="first_name" class="col-2 col-form-label">Identifier</label>
                        <div class="col-3">
                            <select id="identifier_type" name="identifier_type" class="custom-select">
                                <option value="support_broker">Support-Broker</option>
                                <option value="system_one">System 1</option>
                                <option value="system_two">System 2</option>
                                <option value="system_three">System 3</option>
                            </select>
                            <input id="first_name" name="first_name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="first_name" class="col-2 col-form-label">First Name</label>
                        <div class="col-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="first_name" name="first_name" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="surname" class="col-2 col-form-label">Surname</label>
                        <div class="col-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="surname" name="surname" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_of_birth" class="col-2 col-form-label">Date of Birth</label>
                        <div class="col-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                                <input id="date_of_birth" name="date_of_birth" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="postcode" class="col-2 col-form-label">Postcode</label>
                        <div class="col-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-compass"></i>
                                    </div>
                                </div>
                                <input id="postcode" name="postcode" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-2 col-10">
                            <button name="submit" type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-info">
            <div class="card-header">
                Results
            </div>
            <div class="card-body">
                <table id="personresults" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Surname</th>
                            <th>Address(s)</th>
                            <th>Date of Birth</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>Open</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('pagescripts')

<script>
    $(function ()
    {
        $('#personresults').DataTable(
            {
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      }
      );
    });
</script>


@endsection
