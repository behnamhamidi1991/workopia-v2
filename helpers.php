<?php


/**
 * Get the base path
 * 
 * @param $path
 * @return string
 */
function basePath($path = '') {
    return __DIR__ . '/' . $path;
}


/**
 * Load a view
 * 
 * @param $name
 * @return void
 */
function loadView ($name, $data = []) {
    $viewPath = basePath("App/views/{$name}.view.php");
    
    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "Path {$name} does not exist!";
    }
  
}


/**
 * Load a partial
 * 
 * @param $name
 * @return void
 */
function loadPartial ($name) {
    $partialPath = basePath("App/views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial {$name} does not exists!";
    }

}


/**
 * Inspect a value or values
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * Inspect a value or values and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value) {
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}


/**
 * Format Salary
 * 
 * @param string $salary
 * @return string Formatted Salary
 */
function formatSalary($salary) {
    return '$' . number_format(floatval($salary));
}

/**
 * Sanitize Data
 * 
 * @param string $dirty
 * @return string 
 */
function sanitize($dirty) {
    return filter_var(trim($dirty), FILTER_SANITIZE_SPECIAL_CHARS);
}

/**
 * Redirect to a given url
 * 
 * @param string $url
 * @return void
 */
function redirect($url) {
    header("Location: {$url}");
    exit;
}