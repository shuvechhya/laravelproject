
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('resources/app.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .navbar-brand {
        color: white !important;
      }
      .nav-link {
        color: white !important;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">TechField</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/customer') }}">Customer</a>

            </li>
          </ul>
        </div>
      </nav>
    </div>

  <div class="container">
    <h1 class="text-center mb-4">
      {{$title}}
    </h1>
    <form action="{{$url}}" method="POST">
      @csrf
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $customer->name ?? '') }}" required>
            <span class="text-danger">
              @error('name')
              {{ $message }}
              @enderror
            </span>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $customer->email ?? '') }}" required>
            <span class="text-danger">
              @error('email')
              {{ $message }}
              @enderror
            </span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <span class="text-danger">
              @error('password')
              {{ $message }}
              @enderror
            </span>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="country">Country</label>
            <select id="country" name="country" class="form-control">
              <option value="">Select Country</option>
              <option value="Afghanistan">Afghanistan</option>
              <option value="Albania">Albania</option>
              <option value="Algeria">Algeria</option>
              <option value="Algeria">Algeria</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Brazil">Brazil</option>
            <option value="Brunei">Brunei</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cabo Verde">Cabo Verde</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
            <option value="Congo, Republic of the">Congo, Republic of the</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Eswatini">Eswatini</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Greece">Greece</option>
            <option value="Grenada">Grenada</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-Bissau">Guinea-Bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Honduras">Honduras</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran">Iran</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Korea, North">Korea, North</option>
            <option value="Korea, South">Korea, South</option>
            <option value="Kosovo">Kosovo</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Laos">Laos</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libya">Libya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malawi">Malawi</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mexico">Mexico</option>
            <option value="Micronesia">Micronesia</option>
            <option value="Moldova">Moldova</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="North Macedonia">North Macedonia</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option>
            <option value="Palestine">Palestine</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Qatar">Qatar</option>
            <option value="Romania">Romania</option>
            <option value="Russia">Russia</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint">Saint</option>
            </select>
            <span class="text-danger">
              @error('country')
              {{ $message }}
              @enderror
            </span>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="state">State</label>
            <select id="state" name="state" class="form-control">
              <option value="">Select State</option>
              <div class="col">
        <option value="Kabul">Kabul</option>
    <option value="Tirana">Tirana</option>
    <option value="Algiers">Algiers</option>
    <option value="Andorra">Andorra la Vella</option>
    <option value="Angola">Luanda</option>
    <option value="Antigua and Barbuda">St. John's</option>
    <option value="Argentina">Buenos Aires</option>
    <option value="Armenia">Yerevan</option>
    <option value="Australia">Canberra</option>
    <option value="Austria">Vienna</option>
    <option value="Azerbaijan">Baku</option>
    <option value="Bahamas">Nassau</option>
    <option value="Bahrain">Manama</option>
    <option value="Bangladesh">Dhaka</option>
    <option value="Barbados">Bridgetown</option>
    <option value="Belarus">Minsk</option>
    <option value="Belgium">Brussels</option>
    <option value="Belize">Belmopan</option>
    <option value="Benin">Porto-Novo (official), Cotonou (seat of government)</option>
    <option value="Bhutan">Thimphu</option>
    <option value="Bolivia">Sucre (constitutional), La Paz (administrative)</option>
    <option value="Bosnia and Herzegovina">Sarajevo</option>
    <option value="Botswana">Gaborone</option>
    <option value="Brazil">Brasília</option>
    <option value="Brunei">Bandar Seri Begawan</option>
    <option value="Bulgaria">Sofia</option>
    <option value="Burkina Faso">Ouagadougou</option>
    <option value="Burundi">Gitega</option>
    <option value="Cabo Verde">Praia</option>
    <option value="Cambodia">Phnom Penh</option>
    <option value="Cameroon">Yaoundé</option>
    <option value="Canada">Ottawa</option>
    <option value="Central African Republic">Bangui</option>
    <option value="Chad">N'Djamena</option>
    <option value="Chile">Santiago</option>
    <option value="China">Beijing</option>
    <option value="Colombia">Bogotá</option>
    <option value="Comoros">Moroni</option>
    <option value="Congo, Democratic Republic of the">Kinshasa</option>
    <option value="Congo, Republic of the">Brazzaville</option>
    <option value="Costa Rica">San José</option>
    <option value="Croatia">Zagreb</option>
    <option value="Cuba">Havana</option>
    <option value="Cyprus">Nicosia</option>
    <option value="Czech Republic">Prague</option>
    <option value="Denmark">Copenhagen</option>
    <option value="Djibouti">Djibouti City</option>
    <option value="Dominica">Roseau</option>
    <option value="Dominican Republic">Santo Domingo</option>
    <option value="Ecuador">Quito</option>
    <option value="Egypt">Cairo</option>
    <option value="El Salvador">San Salvador</option>
    <option value="Equatorial Guinea">Malabo</option>
    <option value="Eritrea">Asmara</option>
    <option value="Estonia">Tallinn</option>
    <option value="Eswatini">Mbabane (administrative), Lobamba (royal and legislative)</option>
    <option value="Ethiopia">Addis Ababa</option>
    <option value="Fiji">Suva</option>
    <option value="Finland">Helsinki</option>
    <option value="France">Paris</option>
    <option value="Gabon">Libreville</option>
    <option value="Gambia">Banjul</option>
    <option value="Georgia">Tbilisi</option>
    <option value="Germany">Berlin</option>
    <option value="Ghana">Accra</option>
    <option value="Greece">Athens</option>
    <option value="Kabul">Kabul</option>
    <option value="Tirana">Tirana</option>
    <option value="Algiers">Algiers</option>
    <option value="Andorra">Andorra la Vella</option>
    <option value="Luanda">Luanda</option>
    <option value="St. John's">St. John's</option>
    <option value="Buenos Aires">Buenos Aires</option>
    <option value="Yerevan">Yerevan</option>
    <option value="Canberra">Canberra</option>
    <option value="Vienna">Vienna</option>
    <option value="Baku">Baku</option>
    <option value="Nassau">Nassau</option>
    <option value="Manama">Manama</option>
    <option value="Dhaka">Dhaka</option>
    <option value="Bridgetown">Bridgetown</option>
    <option value="Minsk">Minsk</option>
    <option value="Brussels">Brussels</option>
    <option value="Belmopan">Belmopan</option>
    <option value="Porto-Novo (official), Cotonou (seat of government)">Porto-Novo (official), Cotonou (seat of government)</option>
    <option value="Thimphu">Thimphu</option>
    <option value="Sucre (constitutional), La Paz (administrative)">Sucre (constitutional), La Paz (administrative)</option>
    <option value="Sarajevo">Sarajevo</option>
    <option value="Gaborone">Gaborone</option>
    <option value="Brasília">Brasília</option>
    <option value="Bandar Seri Begawan">Bandar Seri Begawan</option>
    <option value="Sofia">Sofia</option>
    <option value="Ouagadougou">Ouagadougou</option>
    <option value="Gitega">Gitega</option>
    <option value="Praia">Praia</option>
    <option value="Phnom Penh">Phnom Penh</option>
    <option value="Yaoundé">Yaoundé</option>
    <option value="Ottawa">Ottawa</option>
    <option value="Bangui">Bangui</option>
    <option value="N'Djamena">N'Djamena</option>
    <option value="Santiago">Santiago</option>
    <option value="Beijing">Beijing</option>
    <option value="Bogotá">Bogotá</option>
    <option value="Moroni">Moroni</option>
    <option value="Kinshasa">Kinshasa</option>
    <option value="Brazzaville">Brazzaville</option>
    <option value="San José">San José</option>
    <option value="Zagreb">Zagreb</option>
    <option value="Havana">Havana</option>
    <option value="Nicosia">Nicosia</option>
    <option value="Prague">Prague</option>
    <option value="Copenhagen">Copenhagen</option>
    <option value="Djibouti City">Djibouti City</option>
    <option value="Roseau">Roseau</option>
    <option value="Santo Domingo">Santo Domingo</option>
    <option value="Quito">Quito</option>
    <option value="Cairo">Cairo</option>
    <option value="San Salvador">San Salvador</option>
    <option value="Malabo">Malabo</option>
    <option value="Asmara">Asmara</option>
    <option value="Tallinn">Tallinn</option>
    <option value="Mbabane (administrative), Lobamba (royal and legislative)">Mbabane (administrative), Lobamba (royal and legislative)</option>
    <option value="Addis Ababa">Addis Ababa</option>
    <option value="Suva">Suva</option>
    <option value="Helsinki">Helsinki</option>
    <option value="Paris">Paris</option>
    <option value="Libreville">Libreville</option>
    <option value="Banjul">Banjul</option>
    <option value="Tbilisi">Tbilisi</option>
    <option value="Berlin">Berlin</option>
    <option value="Accra">Accra</option>
    <option value="Athens">Athens</option>
    <option value="St. George's">St. George's</option>
    <option value="Guatemala City">Guatemala City</option>
    <option value="Conakry">Conakry</option>
    <option value="Bissau">Bissau</option>
    <option value="Georgetown">Georgetown</option>
    <option value="Port-au-Prince">Port-au-Prince</option>
    <option value="Tegucigalpa">Tegucigalpa</option>
    <option value="Budapest">Budapest</option>
    <option value="Reykjavik">Reykjavik</option>
    <option value="New Delhi">New Delhi</option>
    <option value="Jakarta">Jakarta</option>
    <option value="Tehran">Tehran</option>
    <option value="Baghdad">Baghdad</option>
    <option value="Dublin">Dublin</option>
    <option value="Jerusalem">Jerusalem</option>
    <option value="Rome">Rome</option>
    <option value="Kingston">Kingston</option>
    <option value="Tokyo">Tokyo</option>
    <option value="Amman">Amman</option>
    <option value="Nur-Sultan (formerly Astana)">Nur-Sultan (formerly Astana)</option>
    <option value="Nairobi">Nairobi</option>
    <option value="Tarawa Atoll">Tarawa Atoll</option>
    <option value="Pyongyang">Pyongyang</option>
    <option value="Seoul">Seoul</option>
    <option value="Pristina">Pristina</option>
    <option value="Kuwait City">Kuwait City</option>
    <option value="Bishkek">Bishkek</option>
    <option value="Vientiane">Vientiane</option>
    <option value="Riga">Riga</option>
    <option value="Beirut">Beirut</option>
    <option value="Maseru">Maseru</option>
    <option value="Monrovia">Monrovia</option>
    <option value="Tripoli">Tripoli</option>
    <option value="Vaduz">Vaduz</option>
    <option value="Vilnius">Vilnius</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Antananarivo">Antananarivo</option>
    <option value="Lilongwe">Lilongwe</option>
    <option value="Kuala Lumpur">Kuala Lumpur</option>
    <option value="Malé">Malé</option>
    <option value="Bamako">Bamako</option>
    <option value="Valletta">Valletta</option>
    <option value="Majuro">Majuro</option>
    <option value="Nouakchott">Nouakchott</option>
    <option value="Port Louis">Port Louis</option>
    <option value="Mexico City">Mexico City</option>
    <option value="Palikir">Palikir</option>
    <option value="Chișinău">Chișinău</option>
    <option value="Monaco">Monaco</option>
    <option value="Ulaanbaatar">Ulaanbaatar</option>
    <option value="Podgorica">Podgorica</option>
    <option value="Rabat">Rabat</option>
    <option value="Maputo">Maputo</option>
    <option value="Naypyidaw">Naypyidaw</option>
    <option value="Windhoek">Windhoek</option>
    <option value="Yaren">Yaren</option>
    <option value="Kathmandu">Kathmandu</option>
    <option value="Amsterdam">Amsterdam</option>
    <option value="Wellington">Wellington</option>
    <option value="Managua">Managua</option>
    <option value="Niamey">Niamey</option>
    <option value="Abuja">Abuja</option>
    <option value="Skopje">Skopje</option>
    <option value="Oslo">Oslo</option>
    <option value="Muscat">Muscat</option>
    <option value="Islamabad">Islamabad
        
            </select>
            <span class="text-danger">
              @error('state')
              {{ $message }}
              @enderror
            </span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $customer->address ?? '') }}">
        <span class="text-danger">
          @error('address')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="form-group">
        <label>Gender</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="male" name="gender" value="male" {{ old('gender') === 'male' ? 'checked' : '' }}>
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="female" name="gender" value="female" {{ old('gender') === 'female' ? 'checked' : '' }}>
          <label class="form-check-label" for="female">Female</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="other" name="gender" value="other" {{ old('gender') === 'other' ? 'checked' : '' }}>
          <label class="form-check-label" for="other">Other</label>
        </div>
        <span class="text-danger">
          @error('gender')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob', $customer->dob ?? '') }}">
        <span class="text-danger">
          @error('dob')
          {{ $message }}
          @enderror
        </span>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
