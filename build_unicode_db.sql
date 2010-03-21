-- convert the file UCD/UnicodeData.txt into a sqlite
-- database called unicode.db

-- This is incomplete, because I haven't learned what to call the
-- property fields yet. For now I'm naming the most important fields
-- and giving the others nonce names.

-- >>> open('UCD/UnicodeData.txt').readlines()[97].split(';')
-- ['0061', 'LATIN SMALL LETTER A', 'Ll', '0', 'L', '', '', '', '', 'N', '', '', '0041', '', '0041']


create table unicode(
  codepoint varchar(20), -- '0061'
  name varchar(500), -- 'LATIN SMALL LETTER A'
  category varchar(500),-- 'Ll'
  three varchar(10), -- '0'
  four varchar(10), -- 'L'
  five varchar(10), -- ''
  six varchar(10), -- ''
  seven varchar(10), -- ''
  eight varchar(10), -- ''
  nine varchar(10), -- 'N'
  ten varchar(10), -- ''
  eleven varchar(10), -- ''
  twelve varchar(10), -- '0041'
  thirteen varchar(10), -- ''
  fourteen varchar(10) -- '0041'
);


.separator ";"
.import ./UnicodeData.txt unicode



