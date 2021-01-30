<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'name' => 'PHP',
            'description' => 'PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.'
        ]);

        Skill::create([
            'name' => 'Laravel',
            'description' => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.'
        ]);

        Skill::create([
            'name' => 'MySQL',
            'description' => 'MySQL is an open-source relational database management system. Its name is a combination of "My", the name of co-founder Michael Widenius\'s daughter, and "SQL", the abbreviation for Structured Query Language.'
        ]);

        Skill::create([
            'name' => 'HTML',
            'description' => 'Hypertext Markup Language is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.'
        ]);

        Skill::create([
            'name' => 'CSS',
            'description' => 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.'
        ]);

        Skill::create([
            'name' => 'Tailwind CSS',
            'description' => 'A utility-first CSS framework packed with classes like flex , pt-4 , text-center and rotate-90 that can be composed to build any design, directly in your markup.',
        ]);

        Skill::create([
            'name' => 'JavaScript',
            'description' => 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.',
        ]);

        Skill::create([
            'name' => 'Node.js',
            'description' => 'Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that runs on the Chrome V8 engine and executes JavaScript code outside a web browser.',
        ]);

        Skill::create([
            'name' => 'React',
            'description' => 'React is an open-source, front end, JavaScript library for building user interfaces or UI components. It is maintained by Facebook and a community of individual developers and companies. React can be used as a base in the development of single-page or mobile applications.'
        ]);

        Skill::create([
            'name' => 'Vue',
            'description' => 'Vue.js is an open-source model–view–view-model front end JavaScript framework for building user interfaces and single-page applications. It was created by Evan You, and is maintained by him and the rest of the active core team members.',
        ]);
    }
}
