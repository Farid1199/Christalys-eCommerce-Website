CREATE TABLE Reviews (
    ReviewID INT PRIMARY KEY,
    UserID INT,
    Product VARCHAR(255),
    ReviewText TEXT,
    FOREIGN KEY (UserID) REFERENCES Users(ID)
);
