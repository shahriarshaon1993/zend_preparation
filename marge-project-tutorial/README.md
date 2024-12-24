## Lesson 3.16: Doctrine ORM - PHP Entities & Data Mapper Pattern

### ORM (Object Relational Mapping):

```text
    ORM stands for object relational mapping and is a layer that site in between
    your application and the storage layer like database.
    
    Object–relational mapping (ORM, O/RM, and O/R mapping tool) in computer science
    is a programming technique for converting data between a relational database 
    and the memory (usually the heap) of an object-oriented programming language.
    
    Basically ORM lets us map database records with the relationships for example
    to class objects
```

```text
    When its comes to ORMs there are several patterns among them different frameworks
    might implement ORMs differently two of the common ones are.

    Patterns:
    
    1. Active Record
        - Laravel -> Laravel eloquent implements active record pattern to power its ORM.
        
    2. Data Mapper
        - Symphony framework uses data mapper pattern.
```

> It is strongly recommended that you require doctrine/dbal in your composer.json as well, 
> because using the ORM means mapping objects and their fields to database tables and their
> columns, and that requires mentioning so-called types that are defined in doctrine/dbal 
> in your application. Having an explicit requirement means you control when the upgrade to 
> the next major version happens, so that you can do the necessary changes in your application
> beforehand.

### Data Mapper (Data Transfer Between Per):

```text
    Data Mapper is a layer that simplifies data transfer between the in-memory objects
    and the persistent storage like database. this allows the persistence layer to be decoupled
    and isolated from the domain or the business layer.
    
    Doctrine ORM the mapping can be done via:
   
        - Attributes
        - Annotations
        - Config Files
        - PHP Mappers
    
    Attributes and Annotations are meta data that's added to the entities to create the mapping.
    entities are just php objects that have an identity some kind of unique identifier like a
    primary key for example.
```