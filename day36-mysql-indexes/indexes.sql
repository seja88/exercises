SELECT *
FROM `paragraphs`
WHERE `id` = 1337;

-- 0.0008 seconds

EXPLAIN
SELECT *
FROM `paragraphs`
WHERE `id` = 1337;


EXPLAIN
SELECT *
FROM `words`
WHERE `word` = 'kissed';


EXPLAIN
SELECT *
FROM `words`
WHERE `word` LIKE 'ki%';

INSERT
INTO `words`
(`word`)
VALUES
('february');


INSERT
INTO `words`
(`word`)
VALUES
('February');


SELECT *
FROM `paragraphs`
WHERE `text` LIKE '%Edmond Dantès%';

-- 0.0151 seconds
-- 41 results


SELECT *,
    MATCH (`text`) AGAINST ('Edmond Dantès')
FROM `paragraphs`
WHERE MATCH (`text`) AGAINST ('Edmond Dantès')

-- 0.0110 seconds
-- 788 results


SELECT *,
    MATCH (`text`) AGAINST ('Edmond Dantès')
FROM `paragraphs`
WHERE MATCH (`text`) AGAINST ('"Edmond Dantès"')

-- 0.0039 seconds
-- 41 results

SELECT *,
    MATCH (`text`) AGAINST ('Edmond Dantès')
FROM `paragraphs`
WHERE MATCH (`text`) AGAINST ('+Edmond +Dantès' IN BOOLEAN MODE)

-- 90 results