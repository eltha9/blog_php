# A simple Php blog

This blog is made for lamp server's. It use Php and MySQL to run


## Data Base structure

Data base will have 2 table:
- `topics`:
    - `id`: id (in auto increament)
    - `title`: title of the topic 
    - `content`: content of the topic
    - `date`: date of the post
    - `hour`: hour of the post
    - `hash_topic`: hash of the topic (for the comment)
    - `signaled`: numbers of time the topic is signaled

- `topics`:
    - `id`: id (in auto increament)
    - `name`: name of the user
    - `mail`: mail of the user
    - `date`: date of the comment
    - `hour`: hour of the comment
    - `content`: content of the comment
    - `hash_comment`: hash of the comment
    - `hash_topic`: hash of topic
    - `signaled`: numbers of time the topic is signaled
