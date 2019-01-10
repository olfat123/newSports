@if ( !empty(\App\Model\Country::find($g_country_id)->c_ar_name))
    <img width="40px" src="{{ Storage::url(\App\Model\Country::find($g_country_id)->c_ar_name) }}">
@endif
