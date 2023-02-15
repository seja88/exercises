SELECT *
FROM `countries`;

SELECT *
FROM `countries`
WHERE 1;

-- DELETE
-- FROM `countries`;

SELECT *
FROM `countries`
WHERE `population` > 20000000;

-- this is a comment

SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` DESC;

SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 10;

SELECT `id`, `name`, `population`
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 10;


-- Select european countries with population > 20 mil
-- order them by name alphabetically

SELECT *
FROM `countries`
WHERE `population` > 20000000
  AND `continent` = 'Europe'
ORDER BY `name` ASC;

SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `continent` = 'Europe' DESC,
         `name` ASC;

SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 0, 10;

SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 10, 10;