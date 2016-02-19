@extends('app')

@section('content')
    {!! Form::open(['url' => '/']) !!}
        <fieldset class="form-step  form-step-visible">
            <legend class="form-step-name">Ticket Information</legend>
            <p class="note"><em><small>*Click on title for more information</small></em></p>
            <table class="ticket-table">
                <tr>
                    <th>Qty.</th>
                    <th>Registration Type</th>
                    <th>Price</th>
                </tr>
                @foreach($tickets as $ticket)
                    <tr class="clickable-row">
                        <td>
                            {!! Form::selectRange('number', 0, $ticket->quantity) !!}
                        </td>
                        <td>
                            {!! $ticket->registration_type !!}
                        </td>
                        <td>
                            {!! $ticket->price !!}$
                        </td>
                    </tr>
                    <tr class="description">
                        <td colspan="3">
                            {!! $ticket->description !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </fieldset>
        <fieldset class="form-step">
            <legend class="form-step-name">Attendee Information</legend>
            <div class="attendee-info">
                <h3>Billing information</h3>
                @include("inc.form")
                <a class="btn  btn-green" href="#">Save</a>
            </div>
            <div class="attendee-info">
                <h3>Attendee 1</h3>
                {!! Form::checkbox("use", 1, null, ["id" => "use"]) !!}
                {!! Form::label("use", "Use Billing Information") !!}
                @include("inc.form")
                <a class="btn  btn-green" href="#">Save</a>
            </div>
            <div class="attendee-info">
                <h3>Attendee 2</h3>
                @include("inc.form")
                <a class="btn  btn-green" href="#">Save</a>
            </div>
        </fieldset>
        <fieldset class="form-step">
            <legend></legend>
        </fieldset>
        <div class="preview-order form-step"></div>
    {!! Form::close() !!}
@stop
