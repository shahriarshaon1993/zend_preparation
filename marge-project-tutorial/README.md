## Lesson 3.19: What is active record pattern & how Laravel implements it with Eloquent

### Active record pattern:

```text
    The active record pattern is an approach to accessing data in a database.
    A database table or view is wrapped into a class. Thus, an object instance
    is tied to a single row in the table. After creation of an object, a new
    row is added to the table upon save. Any object loaded gets its information
    from the database. When an object is updated, the corresponding row in the
    table is also updated. The wrapper class implements accessor methods or 
    properties for each column in the table or view.
```