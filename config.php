
<?php
// == CONFIGURACIÓN ==
// Renombra este archivo a config.php y edítalo con tus datos.

// --- CRM (MySQL) ---
const DB_HOST = '188.164.199.68:3306';
const DB_USER = 'gestion_encesap';
const DB_PASS = 'u43#Igh6';
const DB_NAME = 'gestion_encesap';

// Columnas relevantes en la tabla Cursos (CRM)
const COURSE_START_DATE_COLUMN = 'Fecha_inicio'; // Usado para el grupo "MES AÑO"
const COURSE_END_DATE_COLUMN   = 'Fecha_fin'; // Usado para calcular timeend (último viernes 19:00)

// --- Moodle ---
const MOODLE_BASE_URL = 'https://campus.globalsensos.com'; // sin la barra final
const MOODLE_TOKEN    = '3b7cfd031b5aaf90c7818aada0f2bec3';

// Cohortes a las que añadir al usuario (por idnumber). Si no deseas cohortes, deja el array vacío.
const COHORT_IDNUMBERS = [
  // 'COHORTE_GENERAL_2025',
  // 'COHORTE_SENSOS'
];

// --- Grupos (dentro de cada curso) ---
// 1) Grupo por ID del curso de CRM
const ENABLE_GROUP_BY_COURSE_ID = false;
const GROUP_BY_COURSE_ID_NAME_PATTERN = 'CURSO_%d';      // %d -> id_curso (CRM)
const GROUP_BY_COURSE_ID_IDNUMBER_PATTERN = 'curso:%d';  // %d -> id_curso (CRM)

// 2) Grupo por "MES AÑO" de la fecha de inicio del curso
const ENABLE_GROUP_BY_START_MONTH = true;
const GROUP_BY_START_MONTH_NAME_PATTERN = '%s %d';       // %s -> MES (ES), %d -> AÑO
const GROUP_BY_START_MONTH_IDNUMBER_PATTERN = 'mes:%02d-%d'; // %02d -> mes num, %d -> año

// --- Seguridad (opcional) ---
// Si rellenas HMAC_SECRET, el webhook exigirá cabecera X-Signature: sha256=<hex> sobre el body crudo.
const HMAC_SECRET = '';

// --- Logs (opcional) ---
const LOG_FILE = __DIR__ . '/logs/app.log';
const ENABLE_LOG = true;


// 1) Grupo por IDENTIFICADOR de la tabla Cursos (CRM)
const ENABLE_GROUP_BY_IDENTIFICADOR = true;
const GROUP_BY_IDENT_NAME_PATTERN = '%s';             // %s -> Identificador literal
const GROUP_BY_IDENT_IDNUMBER_PATTERN = 'ident:%s';   // %s -> Identificador literal
