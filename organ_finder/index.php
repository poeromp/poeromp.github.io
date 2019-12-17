<!DOCTYPE html>
<html>
    <head>
        <title>Organ Finder | Romp PoE Collection</title>

        <link rel="stylesheet" href="assets/dist/style.css"
    </head>

    <?php
        $mapToOrgan = [
            'Lair Map' => ['Heart', 'Lung', 'Liver'],
            'Academy Map' => ['Eye', 'Lung', 'Liver'],
            'Scriptorium Map' => ['Lung', 'Liver'],
            'Vaal Pyramid Map' => ['Heart', 'Eye', 'Brain', 'Lung'],
            'Thicket Map' => ['Eye', 'Lung'],
            'Crimson Temple Map' => ['Heart', 'Lung', 'Liver'],
            'Laboratory Map' => ['Heart', 'Lung', 'Liver'],
            'Arid Lake Map' => ['Eye', 'Lung'],
            'Port Map' => ['Lung', 'Liver'],
            'Mesa Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Underground River Map' => ['Eye', 'Lung'],
            'Carcass Map' => ['Heart', 'Eye', 'Brain', 'Liver'],
            'Arena Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Flooded Mine Map' => ['Heart', 'Eye', 'Brain', 'Lung'],
            'Dungeon Map' => ['Brain', 'Lung', 'Liver'],
            'Marshes Map' => ['Heart', 'Eye', 'Lung'],
            'Shrine Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Sepulchre Map' => ['Lung', 'Liver'],
            'Arachnid Tomb Map' => ['Heart', 'Eye'],
            'Dunes Map' => ['Heart', 'Eye', 'Lung'],
            'Lava Lake Map' => ['Heart', 'Brain', 'Lung'],
            'Waste Pool Map' => ['Heart', 'Eye', 'Lung', 'Liver'],
            'City Square Map' => ['Eye', 'Brain', 'Lung', 'Liver'],
            'Park Map' => ['Heart', 'Eye', 'Brain', 'Lung'],
            'Cemetery Map' => ['Eye', 'Brain', 'Lung'],
            'Spider Lair Map' => ['Eye', 'Lung'],
            'Bog Map' => ['Eye', 'Lung'],
            'Peninsula Map' => ['Eye', 'Brain', 'Liver'],
            'Castle Ruins Map' => ['Heart', 'Eye', 'Lung'],
            'Jungle Valley Map' => ['Eye', 'Lung'],
            'Arsenal Map' => ['Eye', 'Brain', 'Lung', 'Liver'],
            'Underground Sea Map' => ['Heart', 'Brain', 'Lung', 'Liver'],
            'Relic Chambers Map' => ['Eye', 'Lung', 'Liver'],
            'Infested Valley Map' => ['Heart', 'Eye', 'Brain'],
            'Gardens Map' => ['Heart', 'Lung', 'Liver'],
            'Tower Map' => ['Heart', 'Eye', 'Lung', 'Liver'],
            'Conservatory Map' => ['Heart', 'Eye', 'Liver'],
            'Crystal Ore Map' => ['Eye', 'Heart', 'Brain', 'Liver'],
            'Shore Map' => ['Eye', 'Lung', 'Liver'],
            'Ramparts Map' => ['Eye', 'Brain', 'Lung', 'Liver'],
            'Fields Map' => ['Heart', 'Eye', 'Liver'],
            'Volcano Map' => ['Lung'],
            'Tropical Island Map' => ['Eye', 'Lung'],
            'Bazaar Map' => ['Eye', 'Brain', 'Liver'],
            'Arachnid Nest Map' => ['Eye', 'Lung'],
            'Cells Map' => ['Heart', 'Lung', 'Liver'],
            'Excavation Map' => ['Eye', 'Brain', 'Lung', 'Liver'],
            'Museum Map' => ['Eye', 'Brain', 'Liver'],
            'Villa Map' => ['Heart', 'Brain', 'Lung'],
            'Bone Crypt Map' => ['Heart', 'Eye', 'Lung'],
            'Geode Map' => ['Eye', 'Brain', 'Liver'],
            'Vault Map' => ['Eye', 'Brain', 'Lung', 'Liver'],
            'Ivory Temple Map' => ['Eye', 'Heart', 'Brain', 'Lung', 'Liver'],
            'Basilica Map' => [''],
            'Dig Map' => ['Heart', 'Eye', 'Brain', 'Lung'],
            'Summit Map' => ['Heart', 'Eye', 'Brain', 'Lung'],
            'Cage Map' => ['Heart', 'Eye', 'Lung', 'Liver'],
            'Caldera Map' => ['Eye', 'Brain', 'Lung', 'Liver'],
            'Armoury Map' => ['Heart', 'Eye', 'Brain'],
            'Colonnade Map' => ['Eye', 'Brain', 'Liver'],
            'Plateau Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Graveyard Map' => ['Eye', 'Liver', 'Lung'],
            'Burial Chambers Map' => ['Heart', 'Eye'],
            'Pit Map' => ['Heart', 'Eye', 'Lung'],
            'Overgrown Shrine Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Fungal Hollow Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Courtyard Map' => ['Eye', 'Heart', 'Brain', 'Lung', 'Liver'],
            'Atoll Map' => ['Heart', 'Eye', 'Lung'],
            'Racecourse Map' => ['Heart', 'Eye', 'Lung', 'Liver'],
            'Temple Map' => ['Eye', 'Brain', 'Lung', 'Liver'],
            'Desert Spring Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Courthouse Map' => ['Eye', 'Heart', 'Brain', 'Lung', 'Liver'],
            'Mud Geyser Map' => ['Heart', 'Eye', 'Lung'],
            'Spider Forest Map' => ['Heart', 'Eye'],
            'Glacier Map' => ['Eye', 'Lung'],
            'Overgrown Ruin Map' => ['Heart', 'Eye', 'Lung', 'Liver'],
            'Ancient City Map' => ['Eye', 'Lung', 'Liver'],
            'Necropolis Map' => ['Eye', 'Brain', 'Liver'],
            'Desert Map' => ['Eye', 'Liver'],
            'Belfry Map' => ['Heart', 'Brain', 'Lung'],
            'Siege Map' => ['Heart', 'Eye', 'Lung'],
            'Grotto Map' => ['Heart', 'Eye', 'Brain', 'Liver'],
            'Reef Map' => ['Heart', 'Lung', 'Liver'],
            'Acid Caverns Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Lava Chamber Map' => ['Heart', 'Eye', 'Lung', 'Liver'],
            'Dark Forest Map' => ['Heart', 'Lung', 'Liver'],
            'Beach Map' => ['Eye', 'Lung', 'Liver'],
            'Core Map' => ['Heart', 'Eye', 'Lung', 'Liver'],
            'Haunted Mansion Map' => ['Heart', 'Brain', 'Lung', 'Liver'],
            'Mausoleum Map' => ['Eye', 'Liver'],
            'Vaal Temple Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Barrows Map' => ['Eye', 'Brain'],
            'Cursed Crypt Map' => ['Eye', 'Lung', 'Liver'],
            'Coral Ruins Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Maze Map' => ['Heart', 'Brain', 'Lung'],
            'Alleyways Map' => ['Heart', 'Eye', 'Lung', 'Liver'],
            'Lookout Map' => ['Heart', 'Eye', 'Lung', 'Liver'],
            'Primordial Pool Map' => ['Heart', 'Lung', 'Liver'],
            'Precinct Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Lighthouse Map' => ['Eye', 'Heart', 'Brain', 'Lung', 'Liver'],
            'Canyon Map' => ['Heart', 'Eye', 'Lung', 'Liver'],
            'Waterways Map' => ['Eye', 'Lung', 'Liver'],
            'Promenade Map' => ['Eye', 'Heart', 'Brain', 'Liver'],
            'Orchard Map' => ['Heart', 'Brain', 'Lung'],
            'Toxic Sewer Map' => ['Heart', 'Eye', 'Brain', 'Lung'],
            'Malformation Map' => ['Heart', 'Eye', 'Brain', 'Liver'],
            'Crater Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Wharf Map' => ['Eye', 'Brain'],
            'Iceberg Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Channel Map' => ['Heart', 'Eye', 'Lung', 'Liver'],
            'Strand Map' => ['Heart', 'Eye', 'Lung'],
            'Pier Map' => ['Eye', 'Brain', 'Liver'],
            'Phantasmagoria Map' => ['Heart', 'Eye', 'Liver'],
            'Wasteland Map' => ['Heart', 'Eye', 'Lung'],
            'Coves Map' => ['Eye', 'Lung', 'Liver'],
            'Estuary Map' => ['Heart', 'Eye', 'Lung'],
            'Colosseum Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Terrace Map' => ['Heart', 'Eye', 'Lung'],
            'Primordial Blocks Map' => ['Heart', 'Brain', 'Lung', 'Liver'],
            'Defiled Cathedral Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Sulphur Vents Map' => ['Heart', 'Lung', 'Liver'],
            'Shipyard Map' => ['Eye', 'Brain', 'Lung', 'Liver'],
            'Leyline Map' => ['Heart', 'Lung'],
            'Ashen Wood Map' => ['Eye', 'Brain', 'Lung', 'Liver'],
            'Moon Temple Map' => ['Heart', 'Lung', 'Liver'],
            'Palace Map' => ['Heart', 'Eye', 'Brain', 'Lung', 'Liver'],
            'Sunken City Map' => ['Heart', 'Brain', 'Lung', 'Liver'],
            'Mineral Pools Map' => ['Heart', 'Eye'],
            'Ghetto Map' => ['Eye', 'Brain', 'Liver'],
            'Factory Map' => ['Heart', 'Eye', 'Brain', 'Liver'],
            'Residence Map' => ['Lung', 'Liver'],
            'Plaza Map' => ['Heart', 'Brain', 'Lung'],
            'Pen Map' => ['Heart', 'Eye', 'Lung'],
            'Chateau Map' => ['Heart', 'Eye'],
            'Arcade Map' => ['Heart', 'Brain', 'Lung'],
        ];
        ksort($mapToOrgan);
        $organToMap = [
        'Heart' => ['Armoury Map', 'Lair Map', 'Plateau Map', 'Vaal Pyramid Map', 'Pit Map', 'Burial Chambers Map', 'Crimson Temple Map', 'Laboratory Map', 'Overgrown Shrine Map', 'Fungal Hollow Map', 'Courtyard Map', 'Mesa Map', 'Atoll Map', 'Carcass Map', 'Arena Map', 'Racecourse Map', 'Flooded Mine Map', 'Marshes Map', 'Shrine Map', 'Desert Spring Map', 'Arachnid Tomb Map', 'Mud Geyser Map', 'Courthouse Map', 'Spider Forest Map', 'Overgrown Ruin Map', 'Dunes Map', 'Waste Pool Map', 'Lava Lake Map', 'Belfry Map', 'Siege Map', 'Grotto Map', 'Reef Map', 'Acid Caverns Map', 'Lava Chamber Map', 'Dark Forest Map', 'Park Map', 'Core Map', 'Castle Ruins Map', 'Haunted Mansion Map', 'Vaal Temple Map', 'Underground Sea Map', 'Maze Map', 'Coral Ruins Map', 'Infested Valley Map', 'Alleyways Map', 'Lookout Map', 'Primordial Pool Map', 'Precinct Map', 'Lighthouse Map', 'Canyon Map', 'Gardens Map', 'Promenade Map', 'Tower Map', 'Toxic Sewer Map', 'Orchard Map', 'Conservatory Map', 'Crystal Ore Map', 'Malformation Map', 'Crater Map', 'Fields Map', 'Iceberg Map', 'Channel Map', 'Strand Map', 'Phantasmagoria Map', 'Wasteland Map', 'Cells Map', 'Estuary Map', 'Colosseum Map', 'Terrace Map', 'Villa Map', 'Primordial Blocks Map', 'Defiled Cathedral Map', 'Bone Crypt Map', 'Sulphur Vents Map', 'Leyline Map', 'Moon Temple Map', 'Ivory Temple Map', 'Palace Map', 'Dig Map', 'Sunken City Map', 'Mineral Pools Map', 'Summit Map', 'Cage Map', 'Factory Map', 'Plaza Map', 'Pen Map', 'Chateau Map', 'Arcade Map'],
        'Eye' => ['Academy Map', 'Thicket Map', 'Vaal Pyramid Map', 'Arid Lake Map', 'Mesa Map', 'Underground River Map', 'Carcass Map', 'Arena Map', 'Flooded Mine Map', 'Marshes Map', 'Shrine Map', 'Arachnid Tomb Map', 'Dunes Map', 'Waste Pool Map', 'City Square Map', 'Park Map', 'Cemetery Map', 'Bog Map', 'Spider Lair Map', 'Peninsula Map', 'Castle Ruins Map', 'Jungle Valley Map', 'Arsenal Map', 'Relic Chambers Map', 'Infested Valley Map', 'Tower Map', 'Conservatory Map', 'Crystal Ore Map', 'Shore Map', 'Ramparts Map', 'Fields Map', 'Tropical Island Map', 'Bazaar Map', 'Arachnid Nest Map', 'Excavation Map', 'Museum Map', 'Bone Crypt Map', 'Geode Map', 'Vault Map', 'Ivory Temple Map', 'Dig Map', 'Summit Map', 'Cage Map', 'Caldera Map', 'Armoury Map', 'Colonnade Map', 'Graveyard Map', 'Pit Map', 'Burial Chambers Map', 'Overgrown Shrine Map', 'Fungal Hollow Map', 'Courtyard Map', 'Atoll Map', 'Racecourse Map', 'Temple Map', 'Desert Spring Map', 'Mud Geyser Map', 'Courthouse Map', 'Spider Forest Map', 'Glacier Map', 'Overgrown Ruin Map', 'Ancient City Map', 'Necropolis Map', 'Desert Map', 'Siege Map', 'Grotto Map', 'Acid Caverns Map', 'Lava Chamber Map', 'Beach Map', 'Core Map', 'Mausoleum Map', 'Barrows Map', 'Vaal Temple Map', 'Cursed Crypt Map', 'Coral Ruins Map', 'Alleyways Map', 'Lookout Map', 'Precinct Map', 'Lighthouse Map', 'Canyon Map', 'Waterways Map', 'Promenade Map', 'Toxic Sewer Map', 'Malformation Map', 'Wharf Map', 'Crater Map', 'Iceberg Map', 'Channel Map', 'Strand Map', 'Phantasmagoria Map', 'Pier Map', 'Wasteland Map', 'Coves Map', 'Estuary Map', 'Colosseum Map', 'Terrace Map', 'Defiled Cathedral Map', 'Shipyard Map', 'Ashen Wood Map', 'Palace Map', 'Mineral Pools Map', 'Ghetto Map', 'Factory Map', 'Pen Map', 'Chateau Map'],
        'Brain' => ['Armoury Map', 'Colonnade Map', 'Plateau Map', 'Vaal Pyramid Map', 'Overgrown Shrine Map', 'Fungal Hollow Map', 'Courtyard Map', 'Mesa Map', 'Arena Map', 'Carcass Map', 'Temple Map', 'Flooded Mine Map', 'Dungeon Map', 'Shrine Map', 'Desert Spring Map', 'Courthouse Map', 'Necropolis Map', 'Lava Lake Map', 'Belfry Map', 'Grotto Map', 'Acid Caverns Map', 'City Square Map', 'Park Map', 'Cemetery Map', 'Peninsula Map', 'Haunted Mansion Map', 'Barrows Map', 'Vaal Temple Map', 'Arsenal Map', 'Underground Sea Map', 'Maze Map', 'Coral Ruins Map', 'Infested Valley Map', 'Precinct Map', 'Lighthouse Map', 'Promenade Map', 'Toxic Sewer Map', 'Orchard Map', 'Crystal Ore Map', 'Ramparts Map', 'Malformation Map', 'Wharf Map', 'Crater Map', 'Iceberg Map', 'Bazaar Map', 'Pier Map', 'Colosseum Map', 'Excavation Map', 'Museum Map', 'Villa Map', 'Primordial Blocks Map', 'Defiled Cathedral Map', 'Geode Map', 'Shipyard Map', 'Vault Map', 'Ashen Wood Map', 'Ivory Temple Map', 'Palace Map', 'Dig Map', 'Sunken City Map', 'Ghetto Map', 'Summit Map', 'Factory Map', 'Plaza Map', 'Caldera Map', 'Arcade Map'],
        'Lung' => ['Lair Map', 'Academy Map', 'Thicket Map', 'Scriptorium Map', 'Vaal Pyramid Map', 'Crimson Temple Map', 'Laboratory Map', 'Arid Lake Map', 'Mesa Map', 'Port Map', 'Underground River Map', 'Arena Map', 'Flooded Mine Map', 'Dungeon Map', 'Marshes Map', 'Shrine Map', 'Sepulchre Map', 'Dunes Map', 'Waste Pool Map', 'Lava Lake Map', 'City Square Map', 'Park Map', 'Cemetery Map', 'Bog Map', 'Spider Lair Map', 'Castle Ruins Map', 'Jungle Valley Map', 'Arsenal Map', 'Underground Sea Map', 'Relic Chambers Map', 'Gardens Map', 'Tower Map', 'Shore Map', 'Ramparts Map', 'Volcano Map', 'Tropical Island Map', 'Arachnid Nest Map', 'Cells Map', 'Excavation Map', 'Villa Map', 'Bone Crypt Map', 'Vault Map', 'Ivory Temple Map', 'Dig Map', 'Summit Map', 'Cage Map', 'Caldera Map', 'Graveyard Map', 'Plateau Map', 'Pit Map', 'Overgrown Shrine Map', 'Fungal Hollow Map', 'Courtyard Map', 'Atoll Map', 'Racecourse Map', 'Temple Map', 'Desert Spring Map', 'Mud Geyser Map', 'Courthouse Map', 'Glacier Map', 'Overgrown Ruin Map', 'Ancient City Map', 'Belfry Map', 'Siege Map', 'Reef Map', 'Acid Caverns Map', 'Lava Chamber Map', 'Dark Forest Map', 'Beach Map', 'Core Map', 'Haunted Mansion Map', 'Vaal Temple Map', 'Cursed Crypt Map', 'Maze Map', 'Coral Ruins Map', 'Alleyways Map', 'Lookout Map', 'Primordial Pool Map', 'Precinct Map', 'Canyon Map', 'Lighthouse Map', 'Waterways Map', 'Toxic Sewer Map', 'Orchard Map', 'Crater Map', 'Iceberg Map', 'Channel Map', 'Strand Map', 'Wasteland Map', 'Coves Map', 'Estuary Map', 'Colosseum Map', 'Terrace Map', 'Primordial Blocks Map', 'Defiled Cathedral Map', 'Sulphur Vents Map', 'Shipyard Map', 'Leyline Map', 'Moon Temple Map', 'Ashen Wood Map', 'Palace Map', 'Sunken City Map', 'Residence Map', 'Plaza Map', 'Pen Map', 'Arcade Map'],
        'Liver' => ['Lair Map', 'Academy Map', 'Colonnade Map', 'Graveyard Map', 'Plateau Map', 'Scriptorium Map', 'Crimson Temple Map', 'Laboratory Map', 'Overgrown Shrine Map', 'Fungal Hollow Map', 'Courtyard Map', 'Mesa Map', 'Port Map', 'Arena Map', 'Carcass Map', 'Temple Map', 'Racecourse Map', 'Dungeon Map', 'Shrine Map', 'Sepulchre Map', 'Desert Spring Map', 'Courthouse Map', 'Overgrown Ruin Map', 'Ancient City Map', 'Necropolis Map', 'Waste Pool Map', 'Desert Map', 'Grotto Map', 'Reef Map', 'Acid Caverns Map', 'City Square Map', 'Lava Chamber Map', 'Dark Forest Map', 'Beach Map', 'Core Map', 'Peninsula Map', 'Haunted Mansion Map', 'Mausoleum Map', 'Vaal Temple Map', 'Cursed Crypt Map', 'Arsenal Map', 'Underground Sea Map', 'Relic Chambers Map', 'Coral Ruins Map', 'Alleyways Map', 'Lookout Map', 'Primordial Pool Map', 'Precinct Map', 'Canyon Map', 'Lighthouse Map', 'Gardens Map', 'Waterways Map', 'Promenade Map', 'Tower Map', 'Conservatory Map', 'Shore Map', 'Crystal Ore Map', 'Ramparts Map', 'Malformation Map', 'Crater Map', 'Fields Map', 'Iceberg Map', 'Bazaar Map', 'Channel Map', 'Phantasmagoria Map', 'Pier Map', 'Coves Map', 'Cells Map', 'Colosseum Map', 'Excavation Map', 'Museum Map', 'Primordial Blocks Map', 'Defiled Cathedral Map', 'Geode Map', 'Sulphur Vents Map', 'Shipyard Map', 'Vault Map', 'Ivory Temple Map', 'Moon Temple Map', 'Ashen Wood Map', 'Palace Map', 'Sunken City Map', 'Ghetto Map', 'Cage Map', 'Factory Map', 'Residence Map', 'Caldera Map'],
    ];
        arsort($organToMap);
    ?>

    <body>
        <div class="container">
            <h1>PoE Romp - Organ Finder</h1>

            <hr>

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2>Maps by organ</h2>
                </div>

                <div class="col-lg-6 offset-lg-3">
                    <label for="maps-by-organ-selector">
                        <h5>1) Select needed organ</h5>

                        <select id="maps-by-organ-selector">
                            <option></option>
                            <?php
                            foreach($organToMap as $key => $value) {
                                echo '<option value="' . $key . '">' . $key . '</option>';
                            }
                            ?>
                        </select>
                    </label>

                    <p class="spacer"></p>

                    <h5>2) Select maximum number of dropped organs</h5>
                    <h6>If the tool does not find any maps with this limit, it will add 1 to the limit until at least one map has been found.</h6>
                    <p class="spacer"></p>
                    <div>
                        <label for="maps-by-organs-limiter">Organ limit: <span id="maps-by-organs-limiter-count">1</span></label>
                        <input type="range" class="custom-range" min="1" max="5" value="1" id="maps-by-organs-limiter">
                    </div>

                    <p class="spacer"></p>

                    <h5>3) Find maps you want to run</h5>
                    <h6>You can sort by clicking on the table headings and you can search by any value in the table.</h6>

                    <table id="maps-by-organs-table" class="datatable">
                        <thead>
                        <th>Map</th>
                        <th>#</th>
                        <th>Organs</th>
                        </thead>
                    </table>
                    <div id="maps-by-organ-presenter"></div>
                </div>
            </div>

            <hr>

            <div>
                <div class="col-lg-6 offset-lg-3">
                    <h2>Organs by map</h2>
                </div>

                <div class="col-lg-6 offset-lg-3">
                    <label for="organs-by-map-selector">
                        <h5>1) Select available map</h5>

                        <select id="organs-by-map-selector">
                            <option></option>
                            <?php
                                foreach($mapToOrgan as $key => $value) {
                                    echo '<option value="' . $key . '">' . $key . '</option>';
                                }
                            ?>
                        </select>
                    </label>

                    <ul id="organs-by-map-presenter">
                        <li class="Heart">
                            <img src="assets/dist/img/metamorph-heart-icon.png">
                            <span>Heart</span>
                        </li>
                        <li class="Eye">
                            <img src="assets/dist/img/metamorph-eye-icon.png">
                            <span>Eye</span>
                        </li>
                        <li class="Brain">
                            <img src="assets/dist/img/metamorph-brain-icon.png">
                            <span>Brain</span>
                        </li>
                        <li class="Lung">
                            <img src="assets/dist/img/metamorph-lung-icon.png">
                            <span>Lung</span>
                        </li>
                        <li class="Liver">
                            <img src="assets/dist/img/metamorph-liver-icon.png">
                            <span>Liver</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <script src="assets/dist/script.js"></script>
    </body>
</html>