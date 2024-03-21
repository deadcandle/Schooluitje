![7d917a3a-e448-4765-b532-e62a9931f43f](https://github.com/deadcandle/Schooluitje/assets/59292383/93aa2e9d-cee7-4215-9844-ef27dd18e81f)

<details>
  <summary>Disclaimer</summary>
  Klein probleem in de code design waardoor ik uiteindelijk random docenten heb toegewezen per schoolreisje:
  ```php
    public static function findAvailableTeacher() {
        // choose random teacher
        return self::$teachers[array_rand(self::$teachers, 1)];
    }
  ``` 
</details>
