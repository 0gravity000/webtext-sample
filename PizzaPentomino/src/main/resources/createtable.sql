DROP TABLE IF EXISTS PRODUCT_ITEM;

CREATE TABLE PRODUCT_ITEM(
  ITEM_ID VARCHAR(5) NOT NULL,
  ITEM_NAME VARCHAR(20) NOT NULL,
  PRICE INTEGER NOT NULL
);

ALTER TABLE PRODUCT_ITEM ADD PRIMARY KEY (ITEM_ID);
