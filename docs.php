<?php

/*

SpeedMOJO API Documentation

 */

/*
Ok so, we have

Projects
	- Action Lists
		-Action Steps


Project
	- owner_id
	- id
	- name
	- description

Action List
	- project_id
	- id
	- name
	- actions (action steps)

Action Step
	- project_id
	- actions_id
	- id
	- name
	- description
	- assigned_to
	- deadline
 
Comments
	- id
	- made_by
	- content
	- belongs_to
	- belongs_to_type

Files
	- id
	- uploaded_by
	- name
	- tags (optional) 

Team Member
	- leader_user_id
	- team_member_id
	- id
	- name
	- first_name
	- last_name
	- email



 */