export const DATE_FORMAT = 'YYYY MM DD HH:mm:ss ZZ';

export const BUILDING_TYPES: { [index: string]: string } = {
  'energy-reserve': 'Energy Reserve',
  'food-reserve': 'Food Reserve',
  'gas-giant-lab': 'Gas Giant Lab',
  algae: 'Algae',
  algaepond: 'Algae Pond',
  amalgusmeadow: 'Amalgus Meadow',
  apples: 'Apple',
  archaeology: 'Archaeology',
  atmosphericevaporator: 'Atmospheric Evaporator',
  beach1: 'Beach 1',
  beach10: 'Beach 10',
  beach11: 'Beach 11',
  beach12: 'Beach 12',
  beach13: 'Beach 13',
  beach2: 'Beach 2',
  beach3: 'Beach 3',
  beach4: 'Beach 4',
  beach5: 'Beach 5',
  beach6: 'Beach 6',
  beach7: 'Beach 7',
  beach8: 'Beach 8',
  beach9: 'Beach 9',
  beans: 'Bean',
  beeldeban: 'Beeldeban',
  beeldebannest: 'Beeldeban Nest',
  blackholegenerator: 'Black Hole Generator',
  bread: 'Bread',
  burger: 'Burger',
  cannery: 'Cannery',
  capitol: 'Capitol',
  cheese: 'Cheese',
  chips: 'Chip',
  cider: 'Cider',
  citadelofknope: 'Citadel Of Knope',
  cloakinglab: 'Cloaking Lab',
  command: 'Planetary Command Center',
  corn: 'Corn',
  crashedshipsite: 'Crashed Ship Site',
  crater: 'Crater',
  dairy: 'Dairy',
  dentonbrambles: 'Denton Brambles',
  devel: 'Development',
  distributioncenter: 'Distribution Center',
  embassy: 'Embassy',
  entertainment: 'Entertainment',
  espionage: 'Espionage',
  essentiavein: 'Essentia Vein',
  fission: 'Fission',
  fissure: 'Fissure',
  fusion: 'Fusion',
  geneticslab: 'Genetics Lab',
  geo: 'Geo',
  geothermalvent: 'Geo Thermal Vent',
  gratchsgauntlet: 'Gratchs Gauntlet',
  greatballofjunk: 'Great Ball Of Junk',
  grove: 'Grove',
  hallsofvrbansk: 'Halls Of Vrbansk',
  hydrocarbon: 'Hydrocarbon',
  intelligence: 'Intelligence Ministry',
  inteltraining: 'Intel Training',
  interdimensionalrift: 'Inter-Dimensional Rift',
  junkhengesculpture: 'Junk Henge Sculpture',
  kalavianruins: 'Kalavian Ruins',
  kasternskeep: "Kastern's Keep",
  lagoon: 'Lagoon',
  lake: 'Lake',
  lapis: 'Lapis',
  lapisforest: 'Lapis Forest',
  lcota: 'Lost City of Tyleon A',
  lcotb: 'Lost City of Tyleon B',
  lcotc: 'Lost City of Tyleon C',
  lcotd: 'Lost City of Tyleon D',
  lcote: 'Lost City of Tyleon E',
  lcotf: 'Lost City of Tyleon F',
  lcotg: 'Lost City of Tyleon G',
  lcoth: 'Lost City of Tyleon H',
  lcoti: 'Lost City of Tyleon I',
  libraryjith: 'Library Of Jith',
  luxuryhousing: 'Luxury Housing',
  malcud: 'Malcud',
  malcudfield: 'Malcud Field',
  massadshenge: 'Massads Henge',
  mayhemtraining: 'Mayhem Training',
  mercenariesguild: 'Mercenaries Guild',
  metaljunkarches: 'Metal Junk Arches',
  mine: 'Mine',
  miningministry: 'Mining Ministry',
  missioncommand: 'Mission Command',
  munitionslab: 'Munitions Lab',
  naturalspring: 'Natural Spring',
  network19: 'Network-19',
  observatory: 'Observatory',
  oracleanid: 'Oracle Of Anid',
  orerefinery: 'Ore Refinery',
  orestorage: 'Ore Storage',
  oversight: 'Oversight',
  pancake: 'Pancake',
  pantheonofhagness: 'Pantheon Of Hagness',
  park: 'Park',
  pie: 'Pie',
  pilottraining: 'Pilot Training Facility',
  politicstraining: 'Politics Training',
  potato: 'Potato',
  propulsion: 'Propulsion',
  pyramidjunksculpture: 'Pyramid Junk Sculpture',
  ravine: 'Ravine',
  rockyoutcrop: 'Rocky Outcrop',
  sand: 'Sand',
  saw: 'Shield Against Weapons',
  security: 'Security',
  shake: 'Shake',
  shipyard: 'Shipyard',
  singularity: 'Singularity',
  spacejunkpark: 'Space Junk Park',
  spaceport: 'SpacePort',
  ssla: 'Space Station Lab A',
  sslb: 'Space Station Lab B',
  sslc: 'Space Station Lab C',
  ssld: 'Space Station Lab D',
  stockpile: 'Stockpile',
  subspacesupplydepot: 'Subspace Supply Depot',
  syrup: 'Syrup',
  templedrajilites: 'Temple Of The Drajilites',
  terraforminglab: 'Terraforming Lab',
  thedillonforge: 'The Dillon Forge',
  thefttraining: 'Theft Training Facility',
  themepark: 'ThemePark',
  trade: 'Trade',
  transporter: 'Transporter',
  university: 'University',
  volcano: 'Volcano',
  wastedigester: 'Waste Digester',
  wasteenergy: 'Waste Energy',
  wasteexchanger: 'Waste Exchanger',
  wasterecycling: 'Waste Recycling',
  wastesequestration: 'Waste Sequestration',
  wastetreatment: 'Waste Treatment',
  waterproduction: 'Water Production',
  waterpurification: 'Water Purification',
  waterreclamation: 'Water Reclamation Facility',
  waterstorage: 'Water Storage',
  wheat: 'Wheat Farm',
};

export const SHIP_TYPES: { [index: string]: string } = {
  barge: 'Barge',
  bleeder: 'Bleeder',
  cargo_ship: 'Cargo Ship',
  colony_ship: 'Colony Ship',
  detonator: 'Detonator',
  dory: 'Dory',
  drone: 'Drone',
  excavator: 'Excavator',
  fighter: 'Fighter',
  fissure_sealer: 'Fissure Sealer',
  freighter: 'Freighter',
  galleon: 'Galleon',
  gas_giant_settlement_ship: 'Gas Giant Settlement Ship',
  hulk_fast: 'Hulk Fast',
  hulk_huge: 'Hulk Huge',
  hulk: 'Hulk',
  mining_platform_ship: 'Mining Platform Ship',
  observatory_seeker: 'observatory Seeker',
  placebo: 'Nocebo',
  placebo2: 'Nocebo II',
  placebo3: 'Nocebo III',
  placebo4: 'Nocebo IV',
  placebo5: 'Nocebo V',
  placebo6: 'Nocebo VI',
  probe: 'probe',
  scanner: 'Scanner',
  scow_fast: 'Scow Fast',
  scow_large: 'Scow Large',
  scow_mega: 'Scow Mega',
  scow: 'Scow',
  security_ministry_seeker: 'Security Ministry Seeker',
  short_range_colony_ship: 'Short Range Colony Ship',
  smuggler_ship: 'Smuggler Ship',
  snark: 'Snark',
  snark2: 'Snark II',
  snark3: 'Snark III',
  space_station: 'Space Station',
  spaceport_seeker: 'Spaceport Seeker',
  spy_pod: 'Spy Pod',
  spy_shuttle: 'Spy Shuttle',
  stake: 'Stake',
  supply_pod: 'Supply Pod',
  supply_pod2: 'Supply Pod II',
  supply_pod3: 'Supply Pod III',
  supply_pod4: 'Supply Pod IV',
  supply_pod5: 'Supply Pod V',
  surveyor: 'Surveyor',
  sweeper: 'Sweeper',
  terraforming_platform_ship: 'Terraforming Platform Ship',
  thud: 'Thud',
};
