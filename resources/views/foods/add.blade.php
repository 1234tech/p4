@extends('layouts.master')

@section('addForm')

    <h2>Add a grocery item to your pantry.</h2>

    <p>* indicates required field</p>
    <form method="POST" action="/foods">
        {{ csrf_field() }}

        <fieldset class="outsideBorder">
            <fieldset class="insideBorder">

            </fieldset>
            <fieldset class="insideBorder">
            @include('foods.field-validation', ['field' => 'brand_name'])

                <label> * Brand name (Enter the ID number from the brand_id table)<br />
                    <input type="text" name="brand_name" id="brand_name" value="{{ old('brand_name') }}">
                 </label><br />

                @include('foods.field-validation', ['field' => 'item_name'])
                <label>* Item name <br />
                    <input type="text" name="item_name" id="item_name" value="{{ old('item_name') }}">
                </label>
            </fieldset>
            <fieldset class="insideBorder">
                @include('foods.field-validation', ['field' =>'expiration_month'])
                @include('foods.field-validation', ['field' =>'expiration_day'])
                @include('foods.field-validation', ['field' =>'expiration_year'])
                <label>* Expiration date (Month - Day - Year)</label><br />
               <select name="expiration_month">
                   <option value=""></option>
                   <option value="01" {{  (old('expiration_month') == "01") ? 'selected' : '' }}>January</option>
                   <option value="02" {{  (old('expiration_month') == "02") ? 'selected' : '' }}>February</option>
                   <option value="03" {{  (old('expiration_month') == "03") ? 'selected' : '' }}>March</option>
                   <option value="04" {{  (old('expiration_month') == "04") ? 'selected' : '' }}>April</option>
                   <option value="05" {{  (old('expiration_month') == "05") ? 'selected' : '' }}>May</option>
                   <option value="06" {{  (old('expiration_month') == "06") ? 'selected' : '' }}>June</option>
                   <option value="07" {{  (old('expiration_month') == "07") ? 'selected' : '' }}>July</option>
                   <option value="08" {{  (old('expiration_month') == "08") ? 'selected' : '' }}>August</option>
                   <option value="09" {{  (old('expiration_month') == "09") ? 'selected' : '' }}>September</option>
                   <option value="10" {{  (old('expiration_month') == "10") ? 'selected' : '' }}>October</option>
                   <option value="11" {{  (old('expiration_month') == "11") ? 'selected' : '' }}>November</option>
                   <option value="12" {{  (old('expiration_month') == "12") ? 'selected' : '' }}>December</option>
               </select>
                <select name="expiration_day">
                    <option value=""></option>
                    <option value="01" {{  (old('expiration_day') == "1") ? 'selected' : '' }}>1</option>
                    <option value="02" {{  (old('expiration_day') == "2") ? 'selected' : '' }}>2</option>
                    <option value="03" {{  (old('expiration_day') == "3") ? 'selected' : '' }}>3</option>
                    <option value="04" {{  (old('expiration_day') == "4") ? 'selected' : '' }}>4</option>
                    <option value="05" {{  (old('expiration_day') == "5") ? 'selected' : '' }}>5</option>
                    <option value="06" {{  (old('expiration_day') == "6") ? 'selected' : '' }}>6</option>
                    <option value="07" {{  (old('expiration_day') == "7") ? 'selected' : '' }}>7</option>
                    <option value="08" {{  (old('expiration_day') == "8") ? 'selected' : '' }}>8</option>
                    <option value="09" {{  (old('expiration_day') == "9") ? 'selected' : '' }}>9</option>
                    <option value="10" {{  (old('expiration_day') == "10") ? 'selected' : '' }}>10</option>
                    <option value="11" {{  (old('expiration_day') == "11") ? 'selected' : '' }}>11</option>
                    <option value="12" {{  (old('expiration_day') == "12") ? 'selected' : '' }}>12</option>
                    <option value="13" {{  (old('expiration_day') == "13") ? 'selected' : '' }}>13</option>
                    <option value="14" {{  (old('expiration_day') == "14") ? 'selected' : '' }}>14</option>
                    <option value="15" {{  (old('expiration_day') == "15") ? 'selected' : '' }}>15</option>
                    <option value="16" {{  (old('expiration_day') == "16") ? 'selected' : '' }}>16</option>
                    <option value="17" {{  (old('expiration_day') == "17") ? 'selected' : '' }}>17</option>
                    <option value="18" {{  (old('expiration_day') == "18") ? 'selected' : '' }}>18</option>
                    <option value="19" {{  (old('expiration_day') == "19") ? 'selected' : '' }}>19</option>
                    <option value="20" {{  (old('expiration_day') == "20") ? 'selected' : '' }}>20</option>
                    <option value="21" {{  (old('expiration_day') == "21") ? 'selected' : '' }}>21</option>
                    <option value="22" {{  (old('expiration_day') == "22") ? 'selected' : '' }}>22</option>
                    <option value="23" {{  (old('expiration_day') == "23") ? 'selected' : '' }}>23</option>
                    <option value="24" {{  (old('expiration_day') == "24") ? 'selected' : '' }}>24</option>
                    <option value="25" {{  (old('expiration_day') == "25") ? 'selected' : '' }}>25</option>
                    <option value="26" {{  (old('expiration_day') == "26") ? 'selected' : '' }}>26</option>
                    <option value="27" {{  (old('expiration_day') == "27") ? 'selected' : '' }}>27</option>
                    <option value="28" {{  (old('expiration_day') == "28") ? 'selected' : '' }}>28</option>
                    <option value="29" {{  (old('expiration_day') == "29") ? 'selected' : '' }}>29</option>
                    <option value="30" {{  (old('expiration_day') == "30") ? 'selected' : '' }}>30</option>
                    <option value="31" {{  (old('expiration_day') == "31") ? 'selected' : '' }}>31</option>
                </select>
                <select name="expiration_year">
                    <option value=""></option>
                    <option value="2018" {{  (old('expiration_year') == "2018") ? 'selected' : '' }}>2018</option>
                    <option value="2019" {{  (old('expiration_year') == "2019") ? 'selected' : '' }}>2019</option>
                    <option value="2020" {{  (old('expiration_year') == "2020") ? 'selected' : '' }}>2020</option>
                    <option value="2021" {{  (old('expiration_year') == "2021") ? 'selected' : '' }}>2021</option>
                    <option value="2022" {{  (old('expiration_year') == "2022") ? 'selected' : '' }}>2022</option>
                </select>
            </fieldset>
            <fieldset class="insideBorder">
                @include('foods.field-validation', ['field' =>'quantity'])
                <label> * Quantity</label><br />
                <input type="number" name="quantity" min="0" value="{{ old('quantity') }}">
            </fieldset>
            <fieldset class="insideBorder">
                @include('foods.field-validation', ['field' =>'location'])
                <label> * Location</label><br /><br />
                <input type="radio" name="location" value="pantry" {{ (old('location') == "pantry") ? 'checked' : ''}}>Pantry<br />
                <input type="radio" name="location" value="refrigerator" {{  (old('location') == "refrigerator") ? 'checked' : ''}}>Refrigerator<br />
                <input type="radio" name="location" value="freezer" {{  (old('location') == "freezer") ? 'checked' : ''}}>Freezer<br />

            </fieldset>

            <input type="submit" value="Add item" name="button">
        </fieldset>
    </form>

@endsection
