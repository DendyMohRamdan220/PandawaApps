@extends('Layouts.layout')

@section('content')

@push('css')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

<div class="content-wrapper">
  <!-- /.content-header -->
    <div class="p-4 t-d-inner-panel">
        <h3 class="heading-h1 mb-0" id="right-modal-title">Add Lead Info</h3>
        <div id="right-modal-content" class="mt-4"><link rel="stylesheet" href="https://demo.worksuite.biz/vendor/css/dropzone.min.css">
            <div class="row">
                <div class="col-sm-12">
                    <form method="POST" id="save-lead-data-form" autocomplete="off">
                        <div class="add-client bg-dark-grey rounded">
                            <div class="row p-20">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">
                                        <label class="f-14 text-dark-grey mb-12" data-label="true" for="client_name">Lead Name<sup class="f-14 mr-1">*</sup></label>
                                        <input type="text" class="form-control height-35 f-14" placeholder="e.g. John Doe" value="" name="client_name" id="client_name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">
                                        <label class="f-14 text-dark-grey mb-12" data-label="true" for="client_email">Lead Email</label>
                                        <input type="email" autocomplete="off" class="form-control height-35 f-14" placeholder="e.g. johndoe@example.com" value="" name="client_email" id="client_email">
                                        <small id="client_emailHelp" class="form-text text-muted">Email will be used to send proposals.</small>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="status">Choose Agent</label>
                                    <div class="form-group mb-0">
                                        <select name="status" id="status" class="form-control select-picker" data-size="8">
                                            <option value="">--</option>
                                            <option selected="" value="4">Pending</option>
                                            <option value="5">Overview</option>
                                            <option value="6">Confirmed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">
                                        <label class="f-14 text-dark-grey mb-12" data-label="true" for="company_name">Company Name<sup class="f-14 mr-1">*</sup></label>
                                        <input type="text" class="form-control height-35 f-14" placeholder="e.g. John Doe" value="" name="client_name" id="client_name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="status">Status</label>
                                    <div class="form-group mb-0">
                                        <select name="status" id="status" class="form-control select-picker" data-size="8">
                                            <option value="">--</option>
                                            <option selected="" value="4">Pending</option>
                                            <option value="5">Overview</option>
                                            <option value="6">Confirmed</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="country">Allow Follow Up</label>
                                    <div class="form-group mb-0">
                                        <select name="country" id="country" data-live-search="true" class="form-control select-picker" data-size="8">
                                            <option value="">--</option>
                                            <option selected="" value="4">Yes</option>
                                            <option value="5">No</option>
                                        </select>
                                        <div class="dropdown-menu ">
                                                    <div class="bs-searchbox">
                                                        <input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-35" aria-autocomplete="list">
                                                    </div>
                                                    <div class="inner show" role="listbox" id="bs-select-35" tabindex="-1">
                                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group my-3">
                                                <label class="f-14 text-dark-grey mb-12" data-label="" for="website">Website</label>
                                                <input type="text" class="form-control height-35 f-14" placeholder="e.g. https://www.example.com" value="" name="website" id="website" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group my-3">
                                                <label class="f-14 text-dark-grey mb-12" data-label="" for="mobile">Mobile</label>
                                                <input type="tel" class="form-control height-35 f-14" placeholder="e.g. 987654321" value="" name="mobile" id="mobile" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group my-3">
                                                <label class="f-14 text-dark-grey mb-12" data-label="" for="office">Office Phone Number</label>
                                                <input type="text" class="form-control height-35 f-14" placeholder="" value="" name="office" id="office" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="country">Country</label>
                                            <div class="form-group mb-0">
                                                    <select name="country" id="country" data-live-search="true" class="form-control select-picker" data-size="8">
                                                        <option value="">--</option>
                                                        <option data-tokens="AFG" data-content="<span class='flag-icon flag-icon-af flag-icon-squared'></span> Afghanistan" value="Afghanistan">Afghanistan</option>
                                                        <option data-tokens="ALB" data-content="<span class='flag-icon flag-icon-al flag-icon-squared'></span> Albania" value="Albania">Albania</option>
                                                        <option data-tokens="DZA" data-content="<span class='flag-icon flag-icon-dz flag-icon-squared'></span> Algeria" value="Algeria">Algeria</option>
                                                        <option data-tokens="ASM" data-content="<span class='flag-icon flag-icon-as flag-icon-squared'></span> American Samoa" value="American Samoa">American Samoa</option>
                                                        <option data-tokens="AND" data-content="<span class='flag-icon flag-icon-ad flag-icon-squared'></span> Andorra" value="Andorra">Andorra</option>
                                                        <option data-tokens="AGO" data-content="<span class='flag-icon flag-icon-ao flag-icon-squared'></span> Angola" value="Angola">Angola</option>
                                                        <option data-tokens="AIA" data-content="<span class='flag-icon flag-icon-ai flag-icon-squared'></span> Anguilla" value="Anguilla">Anguilla</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-aq flag-icon-squared'></span> Antarctica" value="Antarctica">Antarctica</option>
                                                        <option data-tokens="ATG" data-content="<span class='flag-icon flag-icon-ag flag-icon-squared'></span> Antigua and Barbuda" value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option data-tokens="ARG" data-content="<span class='flag-icon flag-icon-ar flag-icon-squared'></span> Argentina" value="Argentina">Argentina</option>
                                                        <option data-tokens="ARM" data-content="<span class='flag-icon flag-icon-am flag-icon-squared'></span> Armenia" value="Armenia">Armenia</option>
                                                        <option data-tokens="ABW" data-content="<span class='flag-icon flag-icon-aw flag-icon-squared'></span> Aruba" value="Aruba">Aruba</option>
                                                        <option data-tokens="AUS" data-content="<span class='flag-icon flag-icon-au flag-icon-squared'></span> Australia" value="Australia">Australia</option>
                                                        <option data-tokens="AUT" data-content="<span class='flag-icon flag-icon-at flag-icon-squared'></span> Austria" value="Austria">Austria</option>
                                                        <option data-tokens="AZE" data-content="<span class='flag-icon flag-icon-az flag-icon-squared'></span> Azerbaijan" value="Azerbaijan">Azerbaijan</option>
                                                        <option data-tokens="BHS" data-content="<span class='flag-icon flag-icon-bs flag-icon-squared'></span> Bahamas" value="Bahamas">Bahamas</option>
                                                        <option data-tokens="BHR" data-content="<span class='flag-icon flag-icon-bh flag-icon-squared'></span> Bahrain" value="Bahrain">Bahrain</option>
                                                        <option data-tokens="BGD" data-content="<span class='flag-icon flag-icon-bd flag-icon-squared'></span> Bangladesh" value="Bangladesh">Bangladesh</option>
                                                        <option data-tokens="BRB" data-content="<span class='flag-icon flag-icon-bb flag-icon-squared'></span> Barbados" value="Barbados">Barbados</option>
                                                        <option data-tokens="BLR" data-content="<span class='flag-icon flag-icon-by flag-icon-squared'></span> Belarus" value="Belarus">Belarus</option>
                                                        <option data-tokens="BEL" data-content="<span class='flag-icon flag-icon-be flag-icon-squared'></span> Belgium" value="Belgium">Belgium</option>
                                                        <option data-tokens="BLZ" data-content="<span class='flag-icon flag-icon-bz flag-icon-squared'></span> Belize" value="Belize">Belize</option>
                                                        <option data-tokens="BEN" data-content="<span class='flag-icon flag-icon-bj flag-icon-squared'></span> Benin" value="Benin">Benin</option>
                                                        <option data-tokens="BMU" data-content="<span class='flag-icon flag-icon-bm flag-icon-squared'></span> Bermuda" value="Bermuda">Bermuda</option>
                                                        <option data-tokens="BTN" data-content="<span class='flag-icon flag-icon-bt flag-icon-squared'></span> Bhutan" value="Bhutan">Bhutan</option>
                                                        <option data-tokens="BOL" data-content="<span class='flag-icon flag-icon-bo flag-icon-squared'></span> Bolivia" value="Bolivia">Bolivia</option>
                                                        <option data-tokens="BIH" data-content="<span class='flag-icon flag-icon-ba flag-icon-squared'></span> Bosnia and Herzegovina" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                        <option data-tokens="BWA" data-content="<span class='flag-icon flag-icon-bw flag-icon-squared'></span> Botswana" value="Botswana">Botswana</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-bv flag-icon-squared'></span> Bouvet Island" value="Bouvet Island">Bouvet Island</option>
                                                        <option data-tokens="BRA" data-content="<span class='flag-icon flag-icon-br flag-icon-squared'></span> Brazil" value="Brazil">Brazil</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-io flag-icon-squared'></span> British Indian Ocean Territory" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                        <option data-tokens="BRN" data-content="<span class='flag-icon flag-icon-bn flag-icon-squared'></span> Brunei Darussalam" value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option data-tokens="BGR" data-content="<span class='flag-icon flag-icon-bg flag-icon-squared'></span> Bulgaria" value="Bulgaria">Bulgaria</option>
                                                        <option data-tokens="BFA" data-content="<span class='flag-icon flag-icon-bf flag-icon-squared'></span> Burkina Faso" value="Burkina Faso">Burkina Faso</option>
                                                        <option data-tokens="BDI" data-content="<span class='flag-icon flag-icon-bi flag-icon-squared'></span> Burundi" value="Burundi">Burundi</option>
                                                        <option data-tokens="KHM" data-content="<span class='flag-icon flag-icon-kh flag-icon-squared'></span> Cambodia" value="Cambodia">Cambodia</option>
                                                        <option data-tokens="CMR" data-content="<span class='flag-icon flag-icon-cm flag-icon-squared'></span> Cameroon" value="Cameroon">Cameroon</option>
                                                        <option data-tokens="CAN" data-content="<span class='flag-icon flag-icon-ca flag-icon-squared'></span> Canada" value="Canada">Canada</option>
                                                        <option data-tokens="CPV" data-content="<span class='flag-icon flag-icon-cv flag-icon-squared'></span> Cape Verde" value="Cape Verde">Cape Verde</option>
                                                        <option data-tokens="CYM" data-content="<span class='flag-icon flag-icon-ky flag-icon-squared'></span> Cayman Islands" value="Cayman Islands">Cayman Islands</option>
                                                        <option data-tokens="CAF" data-content="<span class='flag-icon flag-icon-cf flag-icon-squared'></span> Central African Republic" value="Central African Republic">Central African Republic</option>
                                                        <option data-tokens="TCD" data-content="<span class='flag-icon flag-icon-td flag-icon-squared'></span> Chad" value="Chad">Chad</option>
                                                        <option data-tokens="CHL" data-content="<span class='flag-icon flag-icon-cl flag-icon-squared'></span> Chile" value="Chile">Chile</option>
                                                        <option data-tokens="CHN" data-content="<span class='flag-icon flag-icon-cn flag-icon-squared'></span> China" value="China">China</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-cx flag-icon-squared'></span> Christmas Island" value="Christmas Island">Christmas Island</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-cc flag-icon-squared'></span> Cocos (Keeling) Islands" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                        <option data-tokens="COL" data-content="<span class='flag-icon flag-icon-co flag-icon-squared'></span> Colombia" value="Colombia">Colombia</option>
                                                        <option data-tokens="COM" data-content="<span class='flag-icon flag-icon-km flag-icon-squared'></span> Comoros" value="Comoros">Comoros</option>
                                                        <option data-tokens="COG" data-content="<span class='flag-icon flag-icon-cg flag-icon-squared'></span> Congo" value="Congo">Congo</option>
                                                        <option data-tokens="COD" data-content="<span class='flag-icon flag-icon-cd flag-icon-squared'></span> Congo, the Democratic Republic of the" value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                        <option data-tokens="COK" data-content="<span class='flag-icon flag-icon-ck flag-icon-squared'></span> Cook Islands" value="Cook Islands">Cook Islands</option>
                                                        <option data-tokens="CRI" data-content="<span class='flag-icon flag-icon-cr flag-icon-squared'></span> Costa Rica" value="Costa Rica">Costa Rica</option>
                                                        <option data-tokens="CIV" data-content="<span class='flag-icon flag-icon-ci flag-icon-squared'></span> Cote D'Ivoire" value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                        <option data-tokens="HRV" data-content="<span class='flag-icon flag-icon-hr flag-icon-squared'></span> Croatia" value="Croatia">Croatia</option>
                                                        <option data-tokens="CUB" data-content="<span class='flag-icon flag-icon-cu flag-icon-squared'></span> Cuba" value="Cuba">Cuba</option>
                                                        <option data-tokens="CYP" data-content="<span class='flag-icon flag-icon-cy flag-icon-squared'></span> Cyprus" value="Cyprus">Cyprus</option>
                                                        <option data-tokens="CZE" data-content="<span class='flag-icon flag-icon-cz flag-icon-squared'></span> Czech Republic" value="Czech Republic">Czech Republic</option>
                                                        <option data-tokens="DNK" data-content="<span class='flag-icon flag-icon-dk flag-icon-squared'></span> Denmark" value="Denmark">Denmark</option>
                                                        <option data-tokens="DJI" data-content="<span class='flag-icon flag-icon-dj flag-icon-squared'></span> Djibouti" value="Djibouti">Djibouti</option>
                                                        <option data-tokens="DMA" data-content="<span class='flag-icon flag-icon-dm flag-icon-squared'></span> Dominica" value="Dominica">Dominica</option>
                                                        <option data-tokens="DOM" data-content="<span class='flag-icon flag-icon-do flag-icon-squared'></span> Dominican Republic" value="Dominican Republic">Dominican Republic</option>
                                                        <option data-tokens="ECU" data-content="<span class='flag-icon flag-icon-ec flag-icon-squared'></span> Ecuador" value="Ecuador">Ecuador</option>
                                                        <option data-tokens="EGY" data-content="<span class='flag-icon flag-icon-eg flag-icon-squared'></span> Egypt" value="Egypt">Egypt</option>
                                                        <option data-tokens="SLV" data-content="<span class='flag-icon flag-icon-sv flag-icon-squared'></span> El Salvador" value="El Salvador">El Salvador</option>
                                                        <option data-tokens="GNQ" data-content="<span class='flag-icon flag-icon-gq flag-icon-squared'></span> Equatorial Guinea" value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option data-tokens="ERI" data-content="<span class='flag-icon flag-icon-er flag-icon-squared'></span> Eritrea" value="Eritrea">Eritrea</option>
                                                        <option data-tokens="EST" data-content="<span class='flag-icon flag-icon-ee flag-icon-squared'></span> Estonia" value="Estonia">Estonia</option>
                                                        <option data-tokens="ETH" data-content="<span class='flag-icon flag-icon-et flag-icon-squared'></span> Ethiopia" value="Ethiopia">Ethiopia</option>
                                                        <option data-tokens="FLK" data-content="<span class='flag-icon flag-icon-fk flag-icon-squared'></span> Falkland Islands (Malvinas)" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                        <option data-tokens="FRO" data-content="<span class='flag-icon flag-icon-fo flag-icon-squared'></span> Faroe Islands" value="Faroe Islands">Faroe Islands</option>
                                                        <option data-tokens="FJI" data-content="<span class='flag-icon flag-icon-fj flag-icon-squared'></span> Fiji" value="Fiji">Fiji</option>
                                                        <option data-tokens="FIN" data-content="<span class='flag-icon flag-icon-fi flag-icon-squared'></span> Finland" value="Finland">Finland</option>
                                                        <option data-tokens="FRA" data-content="<span class='flag-icon flag-icon-fr flag-icon-squared'></span> France" value="France">France</option>
                                                        <option data-tokens="GUF" data-content="<span class='flag-icon flag-icon-gf flag-icon-squared'></span> French Guiana" value="French Guiana">French Guiana</option>
                                                        <option data-tokens="PYF" data-content="<span class='flag-icon flag-icon-pf flag-icon-squared'></span> French Polynesia" value="French Polynesia">French Polynesia</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-tf flag-icon-squared'></span> French Southern Territories" value="French Southern Territories">French Southern Territories</option>
                                                        <option data-tokens="GAB" data-content="<span class='flag-icon flag-icon-ga flag-icon-squared'></span> Gabon" value="Gabon">Gabon</option>
                                                        <option data-tokens="GMB" data-content="<span class='flag-icon flag-icon-gm flag-icon-squared'></span> Gambia" value="Gambia">Gambia</option>
                                                        <option data-tokens="GEO" data-content="<span class='flag-icon flag-icon-ge flag-icon-squared'></span> Georgia" value="Georgia">Georgia</option>
                                                        <option data-tokens="DEU" data-content="<span class='flag-icon flag-icon-de flag-icon-squared'></span> Germany" value="Germany">Germany</option>
                                                        <option data-tokens="GHA" data-content="<span class='flag-icon flag-icon-gh flag-icon-squared'></span> Ghana" value="Ghana">Ghana</option>
                                                        <option data-tokens="GIB" data-content="<span class='flag-icon flag-icon-gi flag-icon-squared'></span> Gibraltar" value="Gibraltar">Gibraltar</option>
                                                        <option data-tokens="GRC" data-content="<span class='flag-icon flag-icon-gr flag-icon-squared'></span> Greece" value="Greece">Greece</option>
                                                        <option data-tokens="GRL" data-content="<span class='flag-icon flag-icon-gl flag-icon-squared'></span> Greenland" value="Greenland">Greenland</option>
                                                        <option data-tokens="GRD" data-content="<span class='flag-icon flag-icon-gd flag-icon-squared'></span> Grenada" value="Grenada">Grenada</option>
                                                        <option data-tokens="GLP" data-content="<span class='flag-icon flag-icon-gp flag-icon-squared'></span> Guadeloupe" value="Guadeloupe">Guadeloupe</option>
                                                        <option data-tokens="GUM" data-content="<span class='flag-icon flag-icon-gu flag-icon-squared'></span> Guam" value="Guam">Guam</option>
                                                        <option data-tokens="GTM" data-content="<span class='flag-icon flag-icon-gt flag-icon-squared'></span> Guatemala" value="Guatemala">Guatemala</option>
                                                        <option data-tokens="GIN" data-content="<span class='flag-icon flag-icon-gn flag-icon-squared'></span> Guinea" value="Guinea">Guinea</option>
                                                        <option data-tokens="GNB" data-content="<span class='flag-icon flag-icon-gw flag-icon-squared'></span> Guinea-Bissau" value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option data-tokens="GUY" data-content="<span class='flag-icon flag-icon-gy flag-icon-squared'></span> Guyana" value="Guyana">Guyana</option>
                                                        <option data-tokens="HTI" data-content="<span class='flag-icon flag-icon-ht flag-icon-squared'></span> Haiti" value="Haiti">Haiti</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-hm flag-icon-squared'></span> Heard Island and Mcdonald Islands" value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                        <option data-tokens="VAT" data-content="<span class='flag-icon flag-icon-va flag-icon-squared'></span> Holy See (Vatican City State)" value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                        <option data-tokens="HND" data-content="<span class='flag-icon flag-icon-hn flag-icon-squared'></span> Honduras" value="Honduras">Honduras</option>
                                                        <option data-tokens="HKG" data-content="<span class='flag-icon flag-icon-hk flag-icon-squared'></span> Hong Kong" value="Hong Kong">Hong Kong</option>
                                                        <option data-tokens="HUN" data-content="<span class='flag-icon flag-icon-hu flag-icon-squared'></span> Hungary" value="Hungary">Hungary</option>
                                                        <option data-tokens="ISL" data-content="<span class='flag-icon flag-icon-is flag-icon-squared'></span> Iceland" value="Iceland">Iceland</option>
                                                        <option data-tokens="IND" data-content="<span class='flag-icon flag-icon-in flag-icon-squared'></span> India" value="India">India</option>
                                                        <option data-tokens="IDN" data-content="<span class='flag-icon flag-icon-id flag-icon-squared'></span> Indonesia" value="Indonesia">Indonesia</option>
                                                        <option data-tokens="IRN" data-content="<span class='flag-icon flag-icon-ir flag-icon-squared'></span> Iran, Islamic Republic of" value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                        <option data-tokens="IRQ" data-content="<span class='flag-icon flag-icon-iq flag-icon-squared'></span> Iraq" value="Iraq">Iraq</option>
                                                        <option data-tokens="IRL" data-content="<span class='flag-icon flag-icon-ie flag-icon-squared'></span> Ireland" value="Ireland">Ireland</option>
                                                        <option data-tokens="ISR" data-content="<span class='flag-icon flag-icon-il flag-icon-squared'></span> Israel" value="Israel">Israel</option>
                                                        <option data-tokens="ITA" data-content="<span class='flag-icon flag-icon-it flag-icon-squared'></span> Italy" value="Italy">Italy</option>
                                                        <option data-tokens="JAM" data-content="<span class='flag-icon flag-icon-jm flag-icon-squared'></span> Jamaica" value="Jamaica">Jamaica</option>
                                                        <option data-tokens="JPN" data-content="<span class='flag-icon flag-icon-jp flag-icon-squared'></span> Japan" value="Japan">Japan</option>
                                                        <option data-tokens="JOR" data-content="<span class='flag-icon flag-icon-jo flag-icon-squared'></span> Jordan" value="Jordan">Jordan</option>
                                                        <option data-tokens="KAZ" data-content="<span class='flag-icon flag-icon-kz flag-icon-squared'></span> Kazakhstan" value="Kazakhstan">Kazakhstan</option>
                                                        <option data-tokens="KEN" data-content="<span class='flag-icon flag-icon-ke flag-icon-squared'></span> Kenya" value="Kenya">Kenya</option>
                                                        <option data-tokens="KIR" data-content="<span class='flag-icon flag-icon-ki flag-icon-squared'></span> Kiribati" value="Kiribati">Kiribati</option>
                                                        <option data-tokens="PRK" data-content="<span class='flag-icon flag-icon-kp flag-icon-squared'></span> Korea, Democratic People's Republic of" value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                        <option data-tokens="KOR" data-content="<span class='flag-icon flag-icon-kr flag-icon-squared'></span> Korea, Republic of" value="Korea, Republic of">Korea, Republic of</option>
                                                        <option data-tokens="KWT" data-content="<span class='flag-icon flag-icon-kw flag-icon-squared'></span> Kuwait" value="Kuwait">Kuwait</option>
                                                        <option data-tokens="KGZ" data-content="<span class='flag-icon flag-icon-kg flag-icon-squared'></span> Kyrgyzstan" value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option data-tokens="LAO" data-content="<span class='flag-icon flag-icon-la flag-icon-squared'></span> Lao People's Democratic Republic" value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                        <option data-tokens="LVA" data-content="<span class='flag-icon flag-icon-lv flag-icon-squared'></span> Latvia" value="Latvia">Latvia</option>
                                                        <option data-tokens="LBN" data-content="<span class='flag-icon flag-icon-lb flag-icon-squared'></span> Lebanon" value="Lebanon">Lebanon</option>
                                                        <option data-tokens="LSO" data-content="<span class='flag-icon flag-icon-ls flag-icon-squared'></span> Lesotho" value="Lesotho">Lesotho</option>
                                                        <option data-tokens="LBR" data-content="<span class='flag-icon flag-icon-lr flag-icon-squared'></span> Liberia" value="Liberia">Liberia</option>
                                                        <option data-tokens="LBY" data-content="<span class='flag-icon flag-icon-ly flag-icon-squared'></span> Libyan Arab Jamahiriya" value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                        <option data-tokens="LIE" data-content="<span class='flag-icon flag-icon-li flag-icon-squared'></span> Liechtenstein" value="Liechtenstein">Liechtenstein</option>
                                                        <option data-tokens="LTU" data-content="<span class='flag-icon flag-icon-lt flag-icon-squared'></span> Lithuania" value="Lithuania">Lithuania</option>
                                                        <option data-tokens="LUX" data-content="<span class='flag-icon flag-icon-lu flag-icon-squared'></span> Luxembourg" value="Luxembourg">Luxembourg</option>
                                                        <option data-tokens="MAC" data-content="<span class='flag-icon flag-icon-mo flag-icon-squared'></span> Macao" value="Macao">Macao</option>
                                                        <option data-tokens="MKD" data-content="<span class='flag-icon flag-icon-mk flag-icon-squared'></span> Macedonia, the Former Yugoslav Republic of" value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                                                        <option data-tokens="MDG" data-content="<span class='flag-icon flag-icon-mg flag-icon-squared'></span> Madagascar" value="Madagascar">Madagascar</option>
                                                        <option data-tokens="MWI" data-content="<span class='flag-icon flag-icon-mw flag-icon-squared'></span> Malawi" value="Malawi">Malawi</option>
                                                        <option data-tokens="MYS" data-content="<span class='flag-icon flag-icon-my flag-icon-squared'></span> Malaysia" value="Malaysia">Malaysia</option>
                                                        <option data-tokens="MDV" data-content="<span class='flag-icon flag-icon-mv flag-icon-squared'></span> Maldives" value="Maldives">Maldives</option>
                                                        <option data-tokens="MLI" data-content="<span class='flag-icon flag-icon-ml flag-icon-squared'></span> Mali" value="Mali">Mali</option>
                                                        <option data-tokens="MLT" data-content="<span class='flag-icon flag-icon-mt flag-icon-squared'></span> Malta" value="Malta">Malta</option>
                                                        <option data-tokens="MHL" data-content="<span class='flag-icon flag-icon-mh flag-icon-squared'></span> Marshall Islands" value="Marshall Islands">Marshall Islands</option>
                                                        <option data-tokens="MTQ" data-content="<span class='flag-icon flag-icon-mq flag-icon-squared'></span> Martinique" value="Martinique">Martinique</option>
                                                        <option data-tokens="MRT" data-content="<span class='flag-icon flag-icon-mr flag-icon-squared'></span> Mauritania" value="Mauritania">Mauritania</option>
                                                        <option data-tokens="MUS" data-content="<span class='flag-icon flag-icon-mu flag-icon-squared'></span> Mauritius" value="Mauritius">Mauritius</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-yt flag-icon-squared'></span> Mayotte" value="Mayotte">Mayotte</option>
                                                        <option data-tokens="MEX" data-content="<span class='flag-icon flag-icon-mx flag-icon-squared'></span> Mexico" value="Mexico">Mexico</option>
                                                        <option data-tokens="FSM" data-content="<span class='flag-icon flag-icon-fm flag-icon-squared'></span> Micronesia, Federated States of" value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                        <option data-tokens="MDA" data-content="<span class='flag-icon flag-icon-md flag-icon-squared'></span> Moldova, Republic of" value="Moldova, Republic of">Moldova, Republic of</option>
                                                        <option data-tokens="MCO" data-content="<span class='flag-icon flag-icon-mc flag-icon-squared'></span> Monaco" value="Monaco">Monaco</option>
                                                        <option data-tokens="MNG" data-content="<span class='flag-icon flag-icon-mn flag-icon-squared'></span> Mongolia" value="Mongolia">Mongolia</option>
                                                        <option data-tokens="MSR" data-content="<span class='flag-icon flag-icon-ms flag-icon-squared'></span> Montserrat" value="Montserrat">Montserrat</option>
                                                        <option data-tokens="MAR" data-content="<span class='flag-icon flag-icon-ma flag-icon-squared'></span> Morocco" value="Morocco">Morocco</option>
                                                        <option data-tokens="MOZ" data-content="<span class='flag-icon flag-icon-mz flag-icon-squared'></span> Mozambique" value="Mozambique">Mozambique</option>
                                                        <option data-tokens="MMR" data-content="<span class='flag-icon flag-icon-mm flag-icon-squared'></span> Myanmar" value="Myanmar">Myanmar</option>
                                                        <option data-tokens="NAM" data-content="<span class='flag-icon flag-icon-na flag-icon-squared'></span> Namibia" value="Namibia">Namibia</option>
                                                        <option data-tokens="NRU" data-content="<span class='flag-icon flag-icon-nr flag-icon-squared'></span> Nauru" value="Nauru">Nauru</option>
                                                        <option data-tokens="NPL" data-content="<span class='flag-icon flag-icon-np flag-icon-squared'></span> Nepal" value="Nepal">Nepal</option>
                                                        <option data-tokens="NLD" data-content="<span class='flag-icon flag-icon-nl flag-icon-squared'></span> Netherlands" value="Netherlands">Netherlands</option>
                                                        <option data-tokens="ANT" data-content="<span class='flag-icon flag-icon-an flag-icon-squared'></span> Netherlands Antilles" value="Netherlands Antilles">Netherlands Antilles</option>
                                                        <option data-tokens="NCL" data-content="<span class='flag-icon flag-icon-nc flag-icon-squared'></span> New Caledonia" value="New Caledonia">New Caledonia</option>
                                                        <option data-tokens="NZL" data-content="<span class='flag-icon flag-icon-nz flag-icon-squared'></span> New Zealand" value="New Zealand">New Zealand</option>
                                                        <option data-tokens="NIC" data-content="<span class='flag-icon flag-icon-ni flag-icon-squared'></span> Nicaragua" value="Nicaragua">Nicaragua</option>
                                                        <option data-tokens="NER" data-content="<span class='flag-icon flag-icon-ne flag-icon-squared'></span> Niger" value="Niger">Niger</option>
                                                        <option data-tokens="NGA" data-content="<span class='flag-icon flag-icon-ng flag-icon-squared'></span> Nigeria" value="Nigeria">Nigeria</option>
                                                        <option data-tokens="NIU" data-content="<span class='flag-icon flag-icon-nu flag-icon-squared'></span> Niue" value="Niue">Niue</option>
                                                        <option data-tokens="NFK" data-content="<span class='flag-icon flag-icon-nf flag-icon-squared'></span> Norfolk Island" value="Norfolk Island">Norfolk Island</option>
                                                        <option data-tokens="MNP" data-content="<span class='flag-icon flag-icon-mp flag-icon-squared'></span> Northern Mariana Islands" value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                        <option data-tokens="NOR" data-content="<span class='flag-icon flag-icon-no flag-icon-squared'></span> Norway" value="Norway">Norway</option>
                                                        <option data-tokens="OMN" data-content="<span class='flag-icon flag-icon-om flag-icon-squared'></span> Oman" value="Oman">Oman</option>
                                                        <option data-tokens="PAK" data-content="<span class='flag-icon flag-icon-pk flag-icon-squared'></span> Pakistan" value="Pakistan">Pakistan</option>
                                                        <option data-tokens="PLW" data-content="<span class='flag-icon flag-icon-pw flag-icon-squared'></span> Palau" value="Palau">Palau</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-ps flag-icon-squared'></span> Palestinian Territory, Occupied" value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                        <option data-tokens="PAN" data-content="<span class='flag-icon flag-icon-pa flag-icon-squared'></span> Panama" value="Panama">Panama</option>
                                                        <option data-tokens="PNG" data-content="<span class='flag-icon flag-icon-pg flag-icon-squared'></span> Papua New Guinea" value="Papua New Guinea">Papua New Guinea</option>
                                                        <option data-tokens="PRY" data-content="<span class='flag-icon flag-icon-py flag-icon-squared'></span> Paraguay" value="Paraguay">Paraguay</option>
                                                        <option data-tokens="PER" data-content="<span class='flag-icon flag-icon-pe flag-icon-squared'></span> Peru" value="Peru">Peru</option>
                                                        <option data-tokens="PHL" data-content="<span class='flag-icon flag-icon-ph flag-icon-squared'></span> Philippines" value="Philippines">Philippines</option>
                                                        <option data-tokens="PCN" data-content="<span class='flag-icon flag-icon-pn flag-icon-squared'></span> Pitcairn" value="Pitcairn">Pitcairn</option>
                                                        <option data-tokens="POL" data-content="<span class='flag-icon flag-icon-pl flag-icon-squared'></span> Poland" value="Poland">Poland</option>
                                                        <option data-tokens="PRT" data-content="<span class='flag-icon flag-icon-pt flag-icon-squared'></span> Portugal" value="Portugal">Portugal</option>
                                                        <option data-tokens="PRI" data-content="<span class='flag-icon flag-icon-pr flag-icon-squared'></span> Puerto Rico" value="Puerto Rico">Puerto Rico</option>
                                                        <option data-tokens="QAT" data-content="<span class='flag-icon flag-icon-qa flag-icon-squared'></span> Qatar" value="Qatar">Qatar</option>
                                                        <option data-tokens="REU" data-content="<span class='flag-icon flag-icon-re flag-icon-squared'></span> Reunion" value="Reunion">Reunion</option>
                                                        <option data-tokens="ROM" data-content="<span class='flag-icon flag-icon-ro flag-icon-squared'></span> Romania" value="Romania">Romania</option>
                                                        <option data-tokens="RUS" data-content="<span class='flag-icon flag-icon-ru flag-icon-squared'></span> Russian Federation" value="Russian Federation">Russian Federation</option>
                                                        <option data-tokens="RWA" data-content="<span class='flag-icon flag-icon-rw flag-icon-squared'></span> Rwanda" value="Rwanda">Rwanda</option>
                                                        <option data-tokens="SHN" data-content="<span class='flag-icon flag-icon-sh flag-icon-squared'></span> Saint Helena" value="Saint Helena">Saint Helena</option>
                                                        <option data-tokens="KNA" data-content="<span class='flag-icon flag-icon-kn flag-icon-squared'></span> Saint Kitts and Nevis" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                        <option data-tokens="LCA" data-content="<span class='flag-icon flag-icon-lc flag-icon-squared'></span> Saint Lucia" value="Saint Lucia">Saint Lucia</option>
                                                        <option data-tokens="SPM" data-content="<span class='flag-icon flag-icon-pm flag-icon-squared'></span> Saint Pierre and Miquelon" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                        <option data-tokens="VCT" data-content="<span class='flag-icon flag-icon-vc flag-icon-squared'></span> Saint Vincent and the Grenadines" value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                        <option data-tokens="WSM" data-content="<span class='flag-icon flag-icon-ws flag-icon-squared'></span> Samoa" value="Samoa">Samoa</option>
                                                        <option data-tokens="SMR" data-content="<span class='flag-icon flag-icon-sm flag-icon-squared'></span> San Marino" value="San Marino">San Marino</option>
                                                        <option data-tokens="STP" data-content="<span class='flag-icon flag-icon-st flag-icon-squared'></span> Sao Tome and Principe" value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                        <option data-tokens="SAU" data-content="<span class='flag-icon flag-icon-sa flag-icon-squared'></span> Saudi Arabia" value="Saudi Arabia">Saudi Arabia</option>
                                                        <option data-tokens="SEN" data-content="<span class='flag-icon flag-icon-sn flag-icon-squared'></span> Senegal" value="Senegal">Senegal</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-cs flag-icon-squared'></span> Serbia and Montenegro" value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                        <option data-tokens="SYC" data-content="<span class='flag-icon flag-icon-sc flag-icon-squared'></span> Seychelles" value="Seychelles">Seychelles</option>
                                                        <option data-tokens="SLE" data-content="<span class='flag-icon flag-icon-sl flag-icon-squared'></span> Sierra Leone" value="Sierra Leone">Sierra Leone</option>
                                                        <option data-tokens="SGP" data-content="<span class='flag-icon flag-icon-sg flag-icon-squared'></span> Singapore" value="Singapore">Singapore</option>
                                                        <option data-tokens="SVK" data-content="<span class='flag-icon flag-icon-sk flag-icon-squared'></span> Slovakia" value="Slovakia">Slovakia</option>
                                                        <option data-tokens="SVN" data-content="<span class='flag-icon flag-icon-si flag-icon-squared'></span> Slovenia" value="Slovenia">Slovenia</option>
                                                        <option data-tokens="SLB" data-content="<span class='flag-icon flag-icon-sb flag-icon-squared'></span> Solomon Islands" value="Solomon Islands">Solomon Islands</option>
                                                        <option data-tokens="SOM" data-content="<span class='flag-icon flag-icon-so flag-icon-squared'></span> Somalia" value="Somalia">Somalia</option>
                                                        <option data-tokens="ZAF" data-content="<span class='flag-icon flag-icon-za flag-icon-squared'></span> South Africa" value="South Africa">South Africa</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-gs flag-icon-squared'></span> South Georgia and the South Sandwich Islands" value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                        <option data-tokens="ESP" data-content="<span class='flag-icon flag-icon-es flag-icon-squared'></span> Spain" value="Spain">Spain</option>
                                                        <option data-tokens="LKA" data-content="<span class='flag-icon flag-icon-lk flag-icon-squared'></span> Sri Lanka" value="Sri Lanka">Sri Lanka</option>
                                                        <option data-tokens="SDN" data-content="<span class='flag-icon flag-icon-sd flag-icon-squared'></span> Sudan" value="Sudan">Sudan</option>
                                                        <option data-tokens="SUR" data-content="<span class='flag-icon flag-icon-sr flag-icon-squared'></span> Suriname" value="Suriname">Suriname</option>
                                                        <option data-tokens="SJM" data-content="<span class='flag-icon flag-icon-sj flag-icon-squared'></span> Svalbard and Jan Mayen" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                        <option data-tokens="SWZ" data-content="<span class='flag-icon flag-icon-sz flag-icon-squared'></span> Swaziland" value="Swaziland">Swaziland</option>
                                                        <option data-tokens="SWE" data-content="<span class='flag-icon flag-icon-se flag-icon-squared'></span> Sweden" value="Sweden">Sweden</option>
                                                        <option data-tokens="CHE" data-content="<span class='flag-icon flag-icon-ch flag-icon-squared'></span> Switzerland" value="Switzerland">Switzerland</option>
                                                        <option data-tokens="SYR" data-content="<span class='flag-icon flag-icon-sy flag-icon-squared'></span> Syrian Arab Republic" value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                        <option data-tokens="TWN" data-content="<span class='flag-icon flag-icon-tw flag-icon-squared'></span> Taiwan, Province of China" value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                        <option data-tokens="TJK" data-content="<span class='flag-icon flag-icon-tj flag-icon-squared'></span> Tajikistan" value="Tajikistan">Tajikistan</option>
                                                        <option data-tokens="TZA" data-content="<span class='flag-icon flag-icon-tz flag-icon-squared'></span> Tanzania, United Republic of" value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                        <option data-tokens="THA" data-content="<span class='flag-icon flag-icon-th flag-icon-squared'></span> Thailand" value="Thailand">Thailand</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-tl flag-icon-squared'></span> Timor-Leste" value="Timor-Leste">Timor-Leste</option>
                                                        <option data-tokens="TGO" data-content="<span class='flag-icon flag-icon-tg flag-icon-squared'></span> Togo" value="Togo">Togo</option>
                                                        <option data-tokens="TKL" data-content="<span class='flag-icon flag-icon-tk flag-icon-squared'></span> Tokelau" value="Tokelau">Tokelau</option>
                                                        <option data-tokens="TON" data-content="<span class='flag-icon flag-icon-to flag-icon-squared'></span> Tonga" value="Tonga">Tonga</option>
                                                        <option data-tokens="TTO" data-content="<span class='flag-icon flag-icon-tt flag-icon-squared'></span> Trinidad and Tobago" value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option data-tokens="TUN" data-content="<span class='flag-icon flag-icon-tn flag-icon-squared'></span> Tunisia" value="Tunisia">Tunisia</option>
                                                        <option data-tokens="TUR" data-content="<span class='flag-icon flag-icon-tr flag-icon-squared'></span> Turkey" value="Turkey">Turkey</option>
                                                        <option data-tokens="TKM" data-content="<span class='flag-icon flag-icon-tm flag-icon-squared'></span> Turkmenistan" value="Turkmenistan">Turkmenistan</option>
                                                        <option data-tokens="TCA" data-content="<span class='flag-icon flag-icon-tc flag-icon-squared'></span> Turks and Caicos Islands" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                        <option data-tokens="TUV" data-content="<span class='flag-icon flag-icon-tv flag-icon-squared'></span> Tuvalu" value="Tuvalu">Tuvalu</option>
                                                        <option data-tokens="UGA" data-content="<span class='flag-icon flag-icon-ug flag-icon-squared'></span> Uganda" value="Uganda">Uganda</option>
                                                        <option data-tokens="UKR" data-content="<span class='flag-icon flag-icon-ua flag-icon-squared'></span> Ukraine" value="Ukraine">Ukraine</option>
                                                        <option data-tokens="ARE" data-content="<span class='flag-icon flag-icon-ae flag-icon-squared'></span> United Arab Emirates" value="United Arab Emirates">United Arab Emirates</option>
                                                        <option data-tokens="GBR" data-content="<span class='flag-icon flag-icon-gb flag-icon-squared'></span> United Kingdom" value="United Kingdom">United Kingdom</option>
                                                        <option data-tokens="USA" data-content="<span class='flag-icon flag-icon-us flag-icon-squared'></span> United States" value="United States">United States</option>
                                                        <option data-tokens="" data-content="<span class='flag-icon flag-icon-um flag-icon-squared'></span> United States Minor Outlying Islands" value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                        <option data-tokens="URY" data-content="<span class='flag-icon flag-icon-uy flag-icon-squared'></span> Uruguay" value="Uruguay">Uruguay</option>
                                                        <option data-tokens="UZB" data-content="<span class='flag-icon flag-icon-uz flag-icon-squared'></span> Uzbekistan" value="Uzbekistan">Uzbekistan</option>
                                                        <option data-tokens="VUT" data-content="<span class='flag-icon flag-icon-vu flag-icon-squared'></span> Vanuatu" value="Vanuatu">Vanuatu</option>
                                                        <option data-tokens="VEN" data-content="<span class='flag-icon flag-icon-ve flag-icon-squared'></span> Venezuela" value="Venezuela">Venezuela</option>
                                                        <option data-tokens="VNM" data-content="<span class='flag-icon flag-icon-vn flag-icon-squared'></span> Viet Nam" value="Viet Nam">Viet Nam</option>
                                                        <option data-tokens="VGB" data-content="<span class='flag-icon flag-icon-vg flag-icon-squared'></span> Virgin Islands, British" value="Virgin Islands, British">Virgin Islands, British</option>
                                                        <option data-tokens="VIR" data-content="<span class='flag-icon flag-icon-vi flag-icon-squared'></span> Virgin Islands, U.s." value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                                        <option data-tokens="WLF" data-content="<span class='flag-icon flag-icon-wf flag-icon-squared'></span> Wallis and Futuna" value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option data-tokens="ESH" data-content="<span class='flag-icon flag-icon-eh flag-icon-squared'></span> Western Sahara" value="Western Sahara">Western Sahara</option>
                                                        <option data-tokens="YEM" data-content="<span class='flag-icon flag-icon-ye flag-icon-squared'></span> Yemen" value="Yemen">Yemen</option>
                                                        <option data-tokens="ZMB" data-content="<span class='flag-icon flag-icon-zm flag-icon-squared'></span> Zambia" value="Zambia">Zambia</option>
                                                        <option data-tokens="ZWE" data-content="<span class='flag-icon flag-icon-zw flag-icon-squared'></span> Zimbabwe" value="Zimbabwe">Zimbabwe</option>
                                                        <option data-tokens="SRB" data-content="<span class='flag-icon flag-icon-rs flag-icon-squared'></span> Serbia" value="Serbia">Serbia</option>
                                                        <option data-tokens="0" data-content="<span class='flag-icon flag-icon-ap flag-icon-squared'></span> Asia / Pacific Region" value="Asia / Pacific Region">Asia / Pacific Region</option>
                                                        <option data-tokens="MNE" data-content="<span class='flag-icon flag-icon-me flag-icon-squared'></span> Montenegro" value="Montenegro">Montenegro</option>
                                                        <option data-tokens="ALA" data-content="<span class='flag-icon flag-icon-ax flag-icon-squared'></span> Aland Islands" value="Aland Islands">Aland Islands</option>
                                                        <option data-tokens="BES" data-content="<span class='flag-icon flag-icon-bq flag-icon-squared'></span> Bonaire, Sint Eustatius and Saba" value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                        <option data-tokens="CUW" data-content="<span class='flag-icon flag-icon-cw flag-icon-squared'></span> Curacao" value="Curacao">Curacao</option>
                                                        <option data-tokens="GGY" data-content="<span class='flag-icon flag-icon-gg flag-icon-squared'></span> Guernsey" value="Guernsey">Guernsey</option>
                                                        <option data-tokens="IMN" data-content="<span class='flag-icon flag-icon-im flag-icon-squared'></span> Isle of Man" value="Isle of Man">Isle of Man</option>
                                                        <option data-tokens="JEY" data-content="<span class='flag-icon flag-icon-je flag-icon-squared'></span> Jersey" value="Jersey">Jersey</option>
                                                        <option data-tokens="---" data-content="<span class='flag-icon flag-icon-xk flag-icon-squared'></span> Kosovo" value="Kosovo">Kosovo</option>
                                                        <option data-tokens="BLM" data-content="<span class='flag-icon flag-icon-bl flag-icon-squared'></span> Saint Barthelemy" value="Saint Barthelemy">Saint Barthelemy</option>
                                                        <option data-tokens="MAF" data-content="<span class='flag-icon flag-icon-mf flag-icon-squared'></span> Saint Martin" value="Saint Martin">Saint Martin</option>
                                                        <option data-tokens="SXM" data-content="<span class='flag-icon flag-icon-sx flag-icon-squared'></span> Sint Maarten" value="Sint Maarten">Sint Maarten</option>
                                                        <option data-tokens="SSD" data-content="<span class='flag-icon flag-icon-ss flag-icon-squared'></span> South Sudan" value="South Sudan">South Sudan</option>
                                                    </select>
                                                    <div class="dropdown-menu ">
                                                        <div class="bs-searchbox">
                                                            <input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-35" aria-autocomplete="list">
                                                        </div>
                                                        <div class="inner show" role="listbox" id="bs-select-35" tabindex="-1">
                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 border-top-grey d-block d-lg-flex d-md-flex justify-content-start px-4 py-3">
                                        <button type="button" class="btn-primary rounded f-14 p-2 mr-3" id="save-lead-form">
                                            <svg class="svg-inline--fa fa-check fa-w-16 mr-1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                                            </svg><!-- <i class="fa fa-check mr-1"></i> Font Awesome fontawesome.com -->Save
                                        </button>
                                            <input type="password" class="autocomplete-password" style="opacity: 0;position: absolute;" autocomplete="off">
                                            <input type="search" class="autocomplete-password" style="opacity: 0;position: absolute;" autocomplete="off">
                                            <a href="https://demo.worksuite.biz/account/tasks" class="btn-cancel rounded f-14 p-2 border-0">
                                                Cancel
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script src="https://demo.worksuite.biz/vendor/jquery/dropzone.min.js"></script>
                </div>
            </div>
        </div>
  </div>
</div>
@endsection
    </div>
@endsection
