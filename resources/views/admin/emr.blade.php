
<!DOCTYPE html>
<html>
<head>
    <title>Admin | EMR</title>
    
</head>
<body>
<x-app-layout>
    <form action="{{ route('emr.store') }}" method="post">
        @csrf

        <!-- Pet Information -->
<h3>Pet Information</h3>
<div style="display: flex;">
  <div style="margin-right: 20px;">
    <label for="petName">Name:</label><br>
    <input type="text" name="petName" id="petName" required>
  </div>
  <div style="margin-right: 20px;">
    <label for="age">Age:</label><br>
    <input type="number" name="age" id="age" required>
  </div>
  <div style="margin-right: 20px;">
    <label for="birthdate">Birthdate:</label><br>
    <input type="date" name="birthdate" id="birthdate" required>
  </div>
  <div style="margin-right: 20px;">
    <label for="species">Species:</label><br>
    <select name="species" id="species" required>
      <option value="dog">Dog</option>
      <option value="cat">Cat</option>
    </select>
  </div>
  <div style="margin-right: 20px;">
    <label for="gender">Gender:</label><br>
    <select name="gender" id="gender" required>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </div>
  <div>
    <label for="weight">Weight:</label><br>
    <input type="number" name="weight" id="weight" step="0.01" required>
  </div>
</div>

        <!-- Health Information -->
        <h3>Health Information</h3>
        
        <!-- Allergies Section -->
<fieldset>
  <legend>Allergies</legend>
  <div style="display: flex;">
    <div style="margin-right: 20px;">
      <label for="allergies">Allergies:</label><br>
      <textarea name="allergies" id="allergies" rows="3"></textarea>
    </div>
    <div>
      <label for="reaction">Reaction:</label><br>
      <textarea name="reaction" id="reaction" rows="2"></textarea>
    </div>
    <div style="margin-left: 20px;">
      <label for="severity">Severity:</label><br>
      <select name="severity" id="severity">
        <option value="Mild">Mild</option>
        <option value="Moderate">Moderate</option>
        <option value="Severe">Severe</option>
      </select>
    </div>
  </div>
</fieldset>



<fieldset>
  <legend>Existing Condition</legend>
  <div style="display: flex;">
    <div style="margin-right: 20px;">
      <label for="diagnoso">Diagnosis:</label><br>
      <textarea name="diagnosis" id="diagnosis" rows="2"></textarea>
    </div>
    <div style="margin-right: 20px;">
      <label for="med_name">Medicine:</label><br>
      <textarea name="med_name" id="med_name" rows="2"></textarea>
    </div>
    <div style="margin-right: 20px;">
      <label for="uses">Uses:</label><br>
      <textarea name="uses" id="uses" rows="2"></textarea>
    </div>
    <div>
      <label for="side_effects">Side Effects:</label><br>
      <textarea name="side_effects" id="side_effects" rows="2"></textarea>
    </div>
  </div>
</fieldset>


<fieldset>
  <legend>Vaccination History</legend>
  <div style="display: flex;">
    <div style="margin-right: 20px;">
      <label for="vax_name">Vaccine Name:</label><br>
      <select name="vax_name" id="vax_name">
        <option value="Modified Live Virus (MLV) Canine Distemper Vaccine">Modified Live Virus (MLV) Canine Distemper Vaccine</option>
        <option value="MLV Canine Parvovirus Vaccine">MLV Canine Parvovirus Vaccine</option>
        <option value="MLV Canine Adenovirus Vaccine (Type 2)">MLV Canine Adenovirus Vaccine (Type 2)</option>
      </select>
    </div>       
    <div style="margin-right: 20px;">
      <label for="effects">Vaccine Effects:</label><br>
      <textarea name="effects" id="effects" rows="2"></textarea>
    </div>
    <div>
      <label for="vax_date">Vaccination Date:</label><br>
      <input type="date" name="vax_date" id="vax_date">
    </div>
  </div>
</fieldset>


<h3>Owner's Information</h3>
<div style="display: flex;">
  <div style="margin-right: 20px;">
    <label for="ownerName">Name:</label><br>
    <input type="text" name="ownerName" id="ownerName" required>
  </div>
  <div style="margin-right: 20px;">
    <label for="phone">Phone:</label><br>
    <input type="tel" name="phone" id="phone" required>
  </div>
  <div>
    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" required>
  </div>
</div>

        <input type="submit" value="Submit">
    </form>
</x-app-layout>
</body>
</html>
