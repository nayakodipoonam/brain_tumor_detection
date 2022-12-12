package com.springbootdb.springbootdb.controller;
import com.springbootdb.springbootdb.entities.Biodata;
import com.springbootdb.springbootdb.services.BiodataService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;
import java.util.*;

@RestController
public class MyDbController {

    @Autowired
    private BiodataService bioservice;
    @GetMapping("/home")
    public String home(){
        return "This is home";
    }

    // Get all biodatas
    @GetMapping("/Biodata")
    public List<Biodata> getbioData()
    {
        return bioservice.getbiodata();
    }

    // Get biodata by id
    @GetMapping("/Biodata/{id}")
    public Biodata getbioDatabyId(@PathVariable int id)
    {
        return this.bioservice.getbiodatabyId(id);
    }

    // Add biodata
    @PostMapping("/Biodata")
    public Biodata addbiodata(@RequestBody Biodata biodata)
    {
        return this.bioservice.addbiodata(biodata);
    }
}

