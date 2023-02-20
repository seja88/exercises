SELECT *
FROM `movies`
ORDER BY `rating` DESC
LIMIT 10;


SELECT *
FROM `movies`
WHERE `votes_nr` > 5000
  AND `movie_type_id` = 1
ORDER BY `rating` DESC
LIMIT 10;


SELECT *
FROM `movies`
WHERE `name` LIKE '%Shawshank%';

--- 111161

SELECT *
FROM `movies`
WHERE `id` = 111161;

INSERT
INTO `movies`
(`movie_type_id`, `name`, `year`)
VALUES
(1, 'John Wick: Chapter 4', 2023);

--- 5863127

SELECT *
FROM `movies`
WHERE `name` LIKE '%John Wick: Chapter 4%';


UPDATE `movies`
SET `movie_status_id` = 14
WHERE `id` = 5863127;

UPDATE `movies`
SET `certification_id` = 25,
    `length` = 169
WHERE `id` = 5863127;


SELECT `movies`.*,
    `movie_statuses`.`slug` AS movie_status_slug,
    `movie_types`.`slug` AS movie_type_slug,
    `movie_types`.`name` AS movie_type_name,
    `certifications`.`slug` AS certification_slug
FROM `movies`
LEFT JOIN `movie_statuses`
    ON `movies`.`movie_status_id` = `movie_statuses`.`id`
LEFT JOIN `movie_types`
    ON `movies`.`movie_type_id` = `movie_types`.`id`
LEFT JOIN `certifications`
    ON `movies`.`certification_id` = `certifications`.`id`
WHERE `movies`.`id` = 5863127;