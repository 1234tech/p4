@extends('layouts.master')

@section('addForm')


    <h2>Add a grocery item to your pantry.</h2>

    <p>* indicates required field</p>
    <form method="GET" action="/add">
        {{ csrf_field() }}
        <fieldset class="outsideBorder">
            <fieldset class="insideBorder">
                @include('foods.field-validation', ['field' => 'brand_name'])
                <label> * Brand name
                    <input type="text" name="brand_name" id="brand_name" value="{{ old('brand_name') }}">
                </label>
            </fieldset>
            <fieldset class="insideBorder">
                @include('foods.field-validation', ['field' => 'item_name'])
                <label>* Item name
                    <input type="text" name="item_name" id="item_name" value="{{ old('item_name') }}">
                </label>
            </fieldset>
            <fieldset class="insideBorder">
                @include('foods.field-validation', ['field' =>'expiration_date'])
                <label>* Expiration date</label>
               <select name="month" required>
                   <option value=""></option>
                   <option value="January">January</option>
                   <option value="February">February</option>
                   <option value="March">March</option>
                   <option value="April">April</option>
                   <option value="May">May</option>
                   <option value="June">June</option>
                   <option value="July">July</option>
                   <option value="August">August</option>
                   <option value="September">September</option>
                   <option value="October">October</option>
                   <option value="November">November</option>
                   <option value="December">December</option>
               </select>
                <select name="day" required>
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select name="year" required>
                    <option value=""></option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </fieldset>
            <fieldset class="insideBorder">
                <label> * Quantity</label>
                <input type="text" name=quantity">
            </fieldset>
            <fieldset class="insideBorder">
                <label> * Location</label><br /><br />
                <input type="radio" name="location" value="pantry">Pantry<br />
                <input type="radio" name="location" value="refrigerator">Refrigerator<br />
                <input type="radio" name="location" valude="freezer">freezer<br />

            </fieldset>

            <input type="submit" value="Submit feedback" name="button">
        </fieldset>
    </form>


    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
