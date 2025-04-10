<!DOCTYPE html>
<html>
<head>
    <title>Pet Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        /* Flex container for horizontal arrangement */
        .info-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }

        /* Flex item to set width for each section */
        .info-item {
            flex: 1 0 300px;
        }

        /* Additional styling for headings and strong tags */
        h2, p strong {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Pet Information</h1>

    @foreach ($petInfo as $pet)
        <!-- Flex container for horizontal arrangement -->
        <div class="info-container">

            <!-- Display Pet Info -->
            <div class="info-item">
                <h2>Pet Info</h2>
                <p><strong>Name:</strong> {{ $pet->name }}</p>
                <p><strong>Age:</strong> {{ $pet->age }}</p>
                <p><strong>Birthdate:</strong> {{ $pet->birthdate }}</p>
                <p><strong>Species:</strong> {{ $pet->species }}</p>
                <p><strong>Gender:</strong> {{ $pet->gender }}</p>
                <p><strong>Weight:</strong> {{ $pet->weight }}</p>
            </div>

            <!-- Display Allergy Info -->
            <div class="info-item">
                <h2>Allergy</h2>
                @php
                    $allergy = App\Models\Admin\Allergy::where('id', $pet->id)->first();
                @endphp
                @if ($allergy)
                    <p><strong>Allergy Name:</strong> {{ $allergy->allergy_name }}</p>
                    <p><strong>Reaction:</strong> {{ $allergy->reaction }}</p>
                    <p><strong>Severity:</strong> {{ $allergy->severity }}</p>
                @else
                    <p>No Allergy Information</p>
                @endif
            </div>

            <!-- Display Condition Info -->
            <div class="info-item">
                <h2>Condition</h2>
                @php
                    $condition = App\Models\Admin\Condition::where('pet_id', $pet->id)->first();
                @endphp
                @if ($condition)
                    <p><strong>Diagnosis:</strong> {{ $condition->diagnosis }}</p>
                    <p><strong>Medication Name:</strong> {{ $condition->med_name }}</p>
                    <p><strong>Uses:</strong> {{ $condition->uses }}</p>
                    <p><strong>Side Effects:</strong> {{ $condition->side_effects }}</p>
                @else
                    <p>No Condition Information</p>
                @endif
            </div>

            <!-- Display EMR Vaccination Info -->
            <div class="info-item">
                <h2>EMR Vaccination</h2>
                @php
                    $emr_vax = App\Models\Admin\VaxInfo::where('pet_id', $pet->id)->first();
                @endphp
                @if ($emr_vax)
                    <p><strong>Vaccine Name:</strong> {{ $emr_vax->vax_name }}</p>
                    <p><strong>Effects:</strong> {{ $emr_vax->effects }}</p>
                    <p><strong>Vaccination Date:</strong> {{ $emr_vax->vax_date }}</p>
                @else
                    <p>No EMR Vaccination Information</p>
                @endif
            </div>

            <!-- Display Owner Info -->
            <div class="info-item">
                <h2>Owner Info</h2>
                @php
                    $owner = App\Models\Admin\OwnerInfo::where('pet_id', $pet->id)->first();
                @endphp
                @if ($owner)
                    <p><strong>Name:</strong> {{ $owner->name }}</p>
                    <p><strong>Phone:</strong> {{ $owner->phone }}</p>
                    <p><strong>Email:</strong> {{ $owner->email }}</p>
                @else
                    <p>No Owner Information</p>
                @endif
            </div>

        </div> <!-- End of info-container -->
    @endforeach
</body>
</html>
