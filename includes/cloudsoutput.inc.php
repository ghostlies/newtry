<?php


// CIRRUS CLOUDS
class Cirrus extends Database { # Making a class that extends, uses stuff, from the class Database
    public function getAllClouds() { # Making a public function
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 1;'); # Adding a variable named stmt (statement) to connect to the database via a query and select some data
        while ($row = $stmt->fetch()) { # When the data is selected
            $type = $row['cloud_type']; # Finding the value in column cloud_type
            return $type; # Returning it
        }
    }
    public function getCloudDescription() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 1;');
        while ($row = $stmt->fetch()) {
            $description = $row['description'];
            return $description;
        }
    }

    public function getClassif() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 1;');
        while ($row = $stmt->fetch()) {
            $classification = $row['classification'];
            return $classification;
        }
    }

    public function getOther() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 1;');
        while ($row = $stmt->fetch()) {
            $other = $row['other'];
            return $other;
        }
    }

    public function lTemp() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 1;');
        while ($row = $stmt->fetch()) {
            $lTemp = $row['lowest_temp'];
            return $lTemp;
        }
    }
    public function hTemp () {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 1;');
        while ($row = $stmt->fetch()) {
            $hTemp = $row['highest_temp'];
            return $hTemp;
        }
    }

    public function lHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 1;');
        while ($row = $stmt->fetch()) {
            $lHumid = $row['lowest_humidity'];
            return $lHumid;
        }
    }

    public function hHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 1;');
        while ($row = $stmt->fetch()) {
            $hHumid = $row['highest_humidity'];
            return $hHumid;
        }
    }

    public function lSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 1;');
        while ($row = $stmt->fetch()) {
            $lSurf = $row['low_height_from_surf'];
            return $lSurf;
        }
    }

    public function hSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 1;');
        while ($row = $stmt->fetch()) {
            $hSurf = $row['high_height_from_surf'];
            return $hSurf;
        }
    }

    public function rain() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 1;');
        while ($row = $stmt->fetch()) {
            $rain = $row['rain'];
        }
        if (!$rain == 1) { # If rain (value) isn't 1, then return "no" and opposite
            return "No";
        } else {
            return "Yes";
        }
    }
}

# The same all way down

// CUMULUS CLOUDS
class Cumulus extends Database {
    public function getAllClouds() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 2;');
        while ($row = $stmt->fetch()) {
            $type = $row['cloud_type'];
            return $type;
        }
    }
    public function getCloudDescription() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 2;');
        while ($row = $stmt->fetch()) {
            $description = $row['description'];
            return $description;
        }
    }

    public function getClassif() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 2;');
        while ($row = $stmt->fetch()) {
            $classification = $row['classification'];
            return $classification;
        }
    }

    public function getOther() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 2;');
        while ($row = $stmt->fetch()) {
            $other = $row['other'];
            return $other;
        }
    }

    public function lTemp() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 2;');
        while ($row = $stmt->fetch()) {
            $lTemp = $row['lowest_temp'];
            return $lTemp;
        }
    }
    public function hTemp () {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 2;');
        while ($row = $stmt->fetch()) {
            $hTemp = $row['highest_temp'];
            return $hTemp;
        }
    }

    public function lHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 2;');
        while ($row = $stmt->fetch()) {
            $lHumid = $row['lowest_humidity'];
            return $lHumid;
        }
    }

    public function hHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 2;');
        while ($row = $stmt->fetch()) {
            $hHumid = $row['highest_humidity'];
            return $hHumid;
        }
    }

    public function lSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 2;');
        while ($row = $stmt->fetch()) {
            $lSurf = $row['low_height_from_surf'];
            return $lSurf;
        }
    }

    public function hSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 2;');
        while ($row = $stmt->fetch()) {
            $hSurf = $row['high_height_from_surf'];
            return $hSurf;
        }
    }

    public function rain() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 2;');
        while ($row = $stmt->fetch()) {
            $rain = $row['rain'];
        }
        if (!$rain == 1) {
            return "No";
        } else {
            return "Yes";
        }
    }    
}


// STRATUS CLOUDS
class Stratus extends Database {
    public function getAllClouds() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 3;');
        while ($row = $stmt->fetch()) {
            $type = $row['cloud_type'];
            return $type;
        }
    }
    public function getCloudDescription() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 3;');
        while ($row = $stmt->fetch()) {
            $description = $row['description'];
            return $description;
        }
    }

    public function getClassif() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 3;');
        while ($row = $stmt->fetch()) {
            $classification = $row['classification'];
            return $classification;
        }
    }

    public function getOther() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 3;');
        while ($row = $stmt->fetch()) {
            $other = $row['other'];
            return $other;
        }
    }

    public function lTemp() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 3;');
        while ($row = $stmt->fetch()) {
            $lTemp = $row['lowest_temp'];
            return $lTemp;
        }
    }
    public function hTemp () {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 3;');
        while ($row = $stmt->fetch()) {
            $hTemp = $row['highest_temp'];
            return $hTemp;
        }
    }

    public function lHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 3;');
        while ($row = $stmt->fetch()) {
            $lHumid = $row['lowest_humidity'];
            return $lHumid;
        }
    }

    public function hHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 3;');
        while ($row = $stmt->fetch()) {
            $hHumid = $row['highest_humidity'];
            return $hHumid;
        }
    }

    public function lSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 3;');
        while ($row = $stmt->fetch()) {
            $lSurf = $row['low_height_from_surf'];
            return $lSurf;
        }
    }

    public function hSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 3;');
        while ($row = $stmt->fetch()) {
            $hSurf = $row['high_height_from_surf'];
            return $hSurf;
        }
    }

    public function rain() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 3;');
        while ($row = $stmt->fetch()) {
            $rain = $row['rain'];
        }
        if (!$rain == 1) {
            return "No";
        } else {
            return "Yes";
        }
    }    
}


// NIMBOSTRATUS CLOUDS
class Nimbostratus extends Database {
    public function getAllClouds() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 4;');
        while ($row = $stmt->fetch()) {
            $type = $row['cloud_type'];
            return $type;
        }
    }
    public function getCloudDescription() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 4;');
        while ($row = $stmt->fetch()) {
            $description = $row['description'];
            return $description;
        }
    }

    public function getClassif() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 4;');
        while ($row = $stmt->fetch()) {
            $classification = $row['classification'];
            return $classification;
        }
    }

    public function getOther() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 4;');
        while ($row = $stmt->fetch()) {
            $other = $row['other'];
            return $other;
        }
    }

    public function lTemp() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 4;');
        while ($row = $stmt->fetch()) {
            $lTemp = $row['lowest_temp'];
            return $lTemp;
        }
    }
    public function hTemp () {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 4;');
        while ($row = $stmt->fetch()) {
            $hTemp = $row['highest_temp'];
            return $hTemp;
        }
    }

    public function lHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 4;');
        while ($row = $stmt->fetch()) {
            $lHumid = $row['lowest_humidity'];
            return $lHumid;
        }
    }

    public function hHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 4;');
        while ($row = $stmt->fetch()) {
            $hHumid = $row['highest_humidity'];
            return $hHumid;
        }
    }

    public function lSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 4;');
        while ($row = $stmt->fetch()) {
            $lSurf = $row['low_height_from_surf'];
            return $lSurf;
        }
    }

    public function hSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 4;');
        while ($row = $stmt->fetch()) {
            $hSurf = $row['high_height_from_surf'];
            return $hSurf;
        }
    } 

    public function rain() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 4;');
        while ($row = $stmt->fetch()) {
            $rain = $row['rain'];
        }
        if (!$rain == 1) {
            return "No";
        } else {
            return "Yes";
        }
    }       
}


// CUMULONIMBUS CLOUD
class Cumulonimbus extends Database {
    public function getAllClouds() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 5;');
        while ($row = $stmt->fetch()) {
            $type = $row['cloud_type'];
            return $type;
        }
    }
    public function getCloudDescription() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 5;');
        while ($row = $stmt->fetch()) {
            $description = $row['description'];
            return $description;
        }
    }

    public function getClassif() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 5;');
        while ($row = $stmt->fetch()) {
            $classification = $row['classification'];
            return $classification;
        }
    }

    public function getOther() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 5;');
        while ($row = $stmt->fetch()) {
            $other = $row['other'];
            return $other;
        }
    }

    public function lTemp() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 5;');
        while ($row = $stmt->fetch()) {
            $lTemp = $row['lowest_temp'];
            return $lTemp;
        }
    }
    public function hTemp () {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 5;');
        while ($row = $stmt->fetch()) {
            $hTemp = $row['highest_temp'];
            return $hTemp;
        }
    }

    public function lHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 5;');
        while ($row = $stmt->fetch()) {
            $lHumid = $row['lowest_humidity'];
            return $lHumid;
        }
    }

    public function hHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 5;');
        while ($row = $stmt->fetch()) {
            $hHumid = $row['highest_humidity'];
            return $hHumid;
        }
    }

    public function lSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 5;');
        while ($row = $stmt->fetch()) {
            $lSurf = $row['low_height_from_surf'];
            return $lSurf;
        }
    }

    public function hSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 5;');
        while ($row = $stmt->fetch()) {
            $hSurf = $row['high_height_from_surf'];
            return $hSurf;
        }
    } 

    public function rain() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 5;');
        while ($row = $stmt->fetch()) {
            $rain = $row['rain'];
        }
        if (!$rain == 1) {
            return "No";
        } else {
            return "Yes";
        }
    }
}

// ALTOCUMULUS CLOUD
class Altocumulus extends Database {
    public function getAllClouds() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 6;');
        while ($row = $stmt->fetch()) {
            $type = $row['cloud_type'];
            return $type;
        }
    }
    public function getCloudDescription() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 6;');
        while ($row = $stmt->fetch()) {
            $description = $row['description'];
            return $description;
        }
    }

    public function getClassif() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 6;');
        while ($row = $stmt->fetch()) {
            $classification = $row['classification'];
            return $classification;
        }
    }

    public function getOther() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 6;');
        while ($row = $stmt->fetch()) {
            $other = $row['other'];
            return $other;
        }
    }

    public function lTemp() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 6;');
        while ($row = $stmt->fetch()) {
            $lTemp = $row['lowest_temp'];
            return $lTemp;
        }
    }
    public function hTemp () {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 6;');
        while ($row = $stmt->fetch()) {
            $hTemp = $row['highest_temp'];
            return $hTemp;
        }
    }

    public function lHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 6;');
        while ($row = $stmt->fetch()) {
            $lHumid = $row['lowest_humidity'];
            return $lHumid;
        }
    }

    public function hHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 6;');
        while ($row = $stmt->fetch()) {
            $hHumid = $row['highest_humidity'];
            return $hHumid;
        }
    }

    public function lSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 6;');
        while ($row = $stmt->fetch()) {
            $lSurf = $row['low_height_from_surf'];
            return $lSurf;
        }
    }

    public function hSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 6;');
        while ($row = $stmt->fetch()) {
            $hSurf = $row['high_height_from_surf'];
            return $hSurf;
        }
    } 

    public function rain() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 6;');
        while ($row = $stmt->fetch()) {
            $rain = $row['rain'];
        }
        if (!$rain == 1) {
            return "No";
        } else {
            return "Yes";
        }
    }
}


// STRATOCUMULUS CLOUD
class Stratocumulus extends Database {
    public function getAllClouds() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 7;');
        while ($row = $stmt->fetch()) {
            $type = $row['cloud_type'];
            return $type;
        }
    }
    public function getCloudDescription() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 7;');
        while ($row = $stmt->fetch()) {
            $description = $row['description'];
            return $description;
        }
    }

    public function getClassif() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 7;');
        while ($row = $stmt->fetch()) {
            $classification = $row['classification'];
            return $classification;
        }
    }

    public function getOther() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 7;');
        while ($row = $stmt->fetch()) {
            $other = $row['other'];
            return $other;
        }
    }

    public function lTemp() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 7;');
        while ($row = $stmt->fetch()) {
            $lTemp = $row['lowest_temp'];
            return $lTemp;
        }
    }
    public function hTemp () {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 7;');
        while ($row = $stmt->fetch()) {
            $hTemp = $row['highest_temp'];
            return $hTemp;
        }
    }

    public function lHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 7;');
        while ($row = $stmt->fetch()) {
            $lHumid = $row['lowest_humidity'];
            return $lHumid;
        }
    }

    public function hHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 7;');
        while ($row = $stmt->fetch()) {
            $hHumid = $row['highest_humidity'];
            return $hHumid;
        }
    }

    public function lSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 7;');
        while ($row = $stmt->fetch()) {
            $lSurf = $row['low_height_from_surf'];
            return $lSurf;
        }
    }

    public function hSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 7;');
        while ($row = $stmt->fetch()) {
            $hSurf = $row['high_height_from_surf'];
            return $hSurf;
        }
    } 

    public function rain() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 7;');
        while ($row = $stmt->fetch()) {
            $rain = $row['rain'];
        }
        if (!$rain == 1) {
            return "No";
        } else {
            return "Yes";
        }
    }
}

// CIRROSTRATUS CLOUD
class Cirrostratus extends Database {
    public function getAllClouds() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 8;');
        while ($row = $stmt->fetch()) {
            $type = $row['cloud_type'];
            return $type;
        }
    }
    public function getCloudDescription() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 8;');
        while ($row = $stmt->fetch()) {
            $description = $row['description'];
            return $description;
        }
    }

    public function getClassif() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 8;');
        while ($row = $stmt->fetch()) {
            $classification = $row['classification'];
            return $classification;
        }
    }

    public function getOther() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 8;');
        while ($row = $stmt->fetch()) {
            $other = $row['other'];
            return $other;
        }
    }

    public function lTemp() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 8;');
        while ($row = $stmt->fetch()) {
            $lTemp = $row['lowest_temp'];
            return $lTemp;
        }
    }
    public function hTemp () {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 8;');
        while ($row = $stmt->fetch()) {
            $hTemp = $row['highest_temp'];
            return $hTemp;
        }
    }

    public function lHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 8;');
        while ($row = $stmt->fetch()) {
            $lHumid = $row['lowest_humidity'];
            return $lHumid;
        }
    }

    public function hHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 8;');
        while ($row = $stmt->fetch()) {
            $hHumid = $row['highest_humidity'];
            return $hHumid;
        }
    }

    public function lSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 8;');
        while ($row = $stmt->fetch()) {
            $lSurf = $row['low_height_from_surf'];
            return $lSurf;
        }
    }

    public function hSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 8;');
        while ($row = $stmt->fetch()) {
            $hSurf = $row['high_height_from_surf'];
            return $hSurf;
        }
    } 

    public function rain() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 8;');
        while ($row = $stmt->fetch()) {
            $rain = $row['rain'];
        }
        if (!$rain == 1) {
            return "No";
        } else {
            return "Yes";
        }
    }
}

// CIRROCUMULUS CLOUD
class Cirrocumulus extends Database {
    public function getAllClouds() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 9;');
        while ($row = $stmt->fetch()) {
            $type = $row['cloud_type'];
            return $type;
        }
    }
    public function getCloudDescription() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 9;');
        while ($row = $stmt->fetch()) {
            $description = $row['description'];
            return $description;
        }
    }

    public function getClassif() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 9;');
        while ($row = $stmt->fetch()) {
            $classification = $row['classification'];
            return $classification;
        }
    }

    public function getOther() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 9;');
        while ($row = $stmt->fetch()) {
            $other = $row['other'];
            return $other;
        }
    }

    public function lTemp() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 9;');
        while ($row = $stmt->fetch()) {
            $lTemp = $row['lowest_temp'];
            return $lTemp;
        }
    }
    public function hTemp () {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 9;');
        while ($row = $stmt->fetch()) {
            $hTemp = $row['highest_temp'];
            return $hTemp;
        }
    }

    public function lHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 9;');
        while ($row = $stmt->fetch()) {
            $lHumid = $row['lowest_humidity'];
            return $lHumid;
        }
    }

    public function hHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 9;');
        while ($row = $stmt->fetch()) {
            $hHumid = $row['highest_humidity'];
            return $hHumid;
        }
    }

    public function lSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 9;');
        while ($row = $stmt->fetch()) {
            $lSurf = $row['low_height_from_surf'];
            return $lSurf;
        }
    }

    public function hSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 9;');
        while ($row = $stmt->fetch()) {
            $hSurf = $row['high_height_from_surf'];
            return $hSurf;
        }
    } 

    public function rain() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 9;');
        while ($row = $stmt->fetch()) {
            $rain = $row['rain'];
        }
        if (!$rain == 1) {
            return "No";
        } else {
            return "Yes";
        }
    }
}

// CONTRAILS CLOUD
class Contrails extends Database {
    public function getAllClouds() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 10;');
        while ($row = $stmt->fetch()) {
            $type = $row['cloud_type'];
            return $type;
        }
    }
    public function getCloudDescription() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 10;');
        while ($row = $stmt->fetch()) {
            $description = $row['description'];
            return $description;
        }
    }

    public function getClassif() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 10;');
        while ($row = $stmt->fetch()) {
            $classification = $row['classification'];
            return $classification;
        }
    }

    public function getOther() {
        $stmt = $this->connect()->query('SELECT * FROM clouds WHERE id = 10;');
        while ($row = $stmt->fetch()) {
            $other = $row['other'];
            return $other;
        }
    }

    public function lTemp() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 10;');
        while ($row = $stmt->fetch()) {
            $lTemp = $row['lowest_temp'];
            return $lTemp;
        }
    }
    public function hTemp () {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 10;');
        while ($row = $stmt->fetch()) {
            $hTemp = $row['highest_temp'];
            return $hTemp;
        }
    }

    public function lHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 10;');
        while ($row = $stmt->fetch()) {
            $lHumid = $row['lowest_humidity'];
            return $lHumid;
        }
    }

    public function hHumid() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 10;');
        while ($row = $stmt->fetch()) {
            $hHumid = $row['highest_humidity'];
            return $hHumid;
        }
    }

    public function lSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 10;');
        while ($row = $stmt->fetch()) {
            $lSurf = $row['low_height_from_surf'];
            return $lSurf;
        }
    }

    public function hSurf() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 10;');
        while ($row = $stmt->fetch()) {
            $hSurf = $row['high_height_from_surf'];
            return $hSurf;
        }
    } 

    public function rain() {
        $stmt = $this->connect()->query('SELECT * FROM clouds where id = 10;');
        while ($row = $stmt->fetch()) {
            $rain = $row['rain'];
        }
        if (!$rain == 1) {
            return "No";
        } else {
            return "Yes";
        }
    }
}
